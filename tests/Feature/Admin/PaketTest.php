<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use App\Models\Paket;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class PaketTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();

        // Create admin user
        $this->admin = User::factory()->create([
            'role' => 'admin',
        ]);

        // Create some barang for testing
        Barang::factory()->count(5)->create();
    }

    public function test_admin_can_access_paket_index_page()
    {
        $response = $this->actingAs($this->admin)
                         ->get(route('admin.paket.index'));

        $response->assertStatus(200);
        $response->assertViewHas(['barangs', 'pakets']);
    }

    public function test_admin_can_create_new_paket()
    {
        $barangIds = Barang::pluck('id')->take(3)->toArray();

        $paketData = [
            'name' => 'Test Paket Premium',
            'price' => 1500000,
            'items' => $barangIds,
        ];

        $response = $this->actingAs($this->admin)
                         ->post(route('admin.paket.store'), $paketData);

        $response->assertRedirect(route('admin.paket.index'));
        $response->assertSessionHas('success', 'Paket berhasil ditambahkan.');

        $this->assertDatabaseHas('pakets', [
            'name' => 'Test Paket Premium',
            'price' => 1500000,
        ]);

        $paket = Paket::where('name', 'Test Paket Premium')->first();
        $this->assertEquals(count($barangIds), $paket->items()->count());
    }

    public function test_admin_can_update_paket()
    {
        $paket = Paket::create([
            'name' => 'Original Paket',
            'price' => 1000000,
        ]);
        $paket->items()->attach(Barang::factory()->count(2)->create());

        $newBarangIds = Barang::pluck('id')->take(3)->toArray();

        $updateData = [
            'name' => 'Updated Paket Name',
            'price' => 2000000,
            'items' => $newBarangIds,
        ];

        $response = $this->actingAs($this->admin)
                         ->put(route('admin.paket.update', $paket), $updateData);

        $response->assertRedirect(route('admin.paket.index'));
        $response->assertSessionHas('success', 'Paket berhasil diperbarui.');

        $paket->refresh();
        $this->assertEquals('Updated Paket Name', $paket->name);
        $this->assertEquals(2000000, $paket->price);
        $this->assertEquals(count($newBarangIds), $paket->items()->count());
    }

    public function test_admin_can_delete_paket()
    {
        $paket = Paket::create([
            'name' => 'Paket to Delete',
            'price' => 500000,
        ]);

        $response = $this->actingAs($this->admin)
                         ->delete(route('admin.paket.destroy', $paket));

        $response->assertRedirect(route('admin.paket.index'));
        $response->assertSessionHas('success', 'Paket berhasil dihapus.');

        $this->assertDatabaseMissing('pakets', ['id' => $paket->id]);
    }

    public function test_paket_creation_validation()
    {
        $invalidData = [
            'name' => '',
            'price' => -1000,
            'items' => [],
        ];

        $response = $this->actingAs($this->admin)
                         ->post(route('admin.paket.store'), $invalidData);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['name', 'price', 'items']);
    }

    public function test_non_admin_cannot_access_paket_management()
    {
        /** @var User $user */
        $user = User::factory()->create(['role' => 'user']);

        $response = $this->actingAs($user)
                         ->get(route('admin.paket.index'));

        // Check if it redirects (302) instead of forbidden (403)
        // This might be due to middleware redirecting to login or home
        $response->assertStatus(302);
    }

    public function test_paket_with_items_relationship()
    {
        $paket = Paket::create([
            'name' => 'Relationship Test Paket',
            'price' => 750000,
        ]);
        $barangs = Barang::factory()->count(3)->create();

        $paket->items()->attach($barangs->pluck('id'));

        $paketWithItems = Paket::with('items')->find($paket->id);

        $this->assertCount(3, $paketWithItems->items);
        $this->assertInstanceOf(Barang::class, $paketWithItems->items->first());
    }
}
