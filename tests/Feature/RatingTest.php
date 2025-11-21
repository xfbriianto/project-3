<?php

namespace Tests\Feature;

use App\Models\Barang;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RatingTest extends TestCase
{
    // Menggunakan RefreshDatabase agar setiap test dimulai dengan database yang bersih
    use RefreshDatabase;

    protected $user;
    protected $barang;

    /**
     * Setup environment for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        // Pastikan User dan Barang Factories sudah ada
        $this->user = User::factory()->create();
        $this->barang = Barang::factory()->create();
    }

    // --- Skenario Berhasil (Happy Path) ---

    /** @test */
    public function a_logged_in_user_can_submit_a_new_rating()
    {
        // 1. Aksi: Pengguna login dan mengirim rating baru
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 4,
            'review' => 'Barang ini bagus!',
        ]);

        // 2. Aseri Controller: Memastikan respons API sukses (200 OK)
        $response->assertStatus(200)
            ->assertJson(['success' => true, 'message' => 'Rating berhasil disimpan']);

        // 3. Aseri Database: Memastikan data tersimpan di database
        $this->assertDatabaseHas('ratings', [
            'user_id' => $this->user->id,
            'barang_id' => $this->barang->id,
            'rating' => 4,
            'review' => 'Barang ini bagus!',
        ]);

        // 4. Aseri Count: Memastikan hanya ada 1 rating di database
        $this->assertCount(1, Rating::all());
    }

    /** @test */
    public function a_logged_in_user_can_update_their_existing_rating()
    {
        // 1. Setup: Buat rating awal
        Rating::create([
            'user_id' => $this->user->id,
            'barang_id' => $this->barang->id,
            'rating' => 2,
            'review' => 'Awalnya kurang',
        ]);

        // 2. Aksi: Pengguna mengirim rating baru (Update)
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 5, // Nilai rating yang diperbarui
            'review' => 'Sudah diperbarui, sangat bagus!', // Review yang diperbarui
        ]);

        // 3. Aseri Controller: Respons sukses
        $response->assertStatus(200)
            ->assertJson(['success' => true, 'message' => 'Rating berhasil disimpan']);

        // 4. Aseri Database: Memastikan rating telah diperbarui (rating=5)
        $this->assertDatabaseHas('ratings', [
            'user_id' => $this->user->id,
            'barang_id' => $this->barang->id,
            'rating' => 5,
            'review' => 'Sudah diperbarui, sangat bagus!',
        ]);

        // 5. Aseri Count: Memastikan tetap hanya ada 1 rating (karena diupdate)
        $this->assertCount(1, Rating::all());
    }

    // --- Skenario Kegagalan (Validation & Authentication) ---

    /** @test */
    public function a_guest_cannot_submit_a_rating()
    {
        // 1. Aksi: Pengguna tamu mengirim rating (tanpa actingAs)
        $response = $this->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 5,
        ]);

        // 2. Aseri: Respons harus 401 Unauthorized (atau 403 Forbidden, tergantung middleware)
        // Saya asumsikan ada middleware 'auth:api' atau sejenisnya di route
        $response->assertStatus(401);

        // 3. Aseri Database: Memastikan tidak ada data yang tersimpan
        $this->assertDatabaseMissing('ratings', [
            'barang_id' => $this->barang->id,
        ]);
    }

    /** @test */
    public function rating_is_required_and_must_be_an_integer()
    {
        // 1. Aksi: Mengirim rating kosong
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => null, // Gagal
        ]);

        // 2. Aseri: Respons harus 422 Unprocessable Entity (Validasi gagal)
        $response->assertStatus(422)
            ->assertJsonValidationErrors('rating');

        // 3. Aksi: Mengirim rating non-integer
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 'abc', // Gagal
        ]);

        // 4. Aseri: Respons 422 dan error rating
        $response->assertStatus(422)
            ->assertJsonValidationErrors('rating');
    }

    /** @test */
    public function rating_must_be_between_1_and_5()
    {
        // 1. Aksi: Mengirim rating di bawah 1
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 0, // Gagal
        ]);

        // 2. Aseri: Error validasi
        $response->assertStatus(422)
            ->assertJsonValidationErrors('rating');

        // 3. Aksi: Mengirim rating di atas 5
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => $this->barang->id,
            'rating' => 6, // Gagal
        ]);

        // 4. Aseri: Error validasi
        $response->assertStatus(422)
            ->assertJsonValidationErrors('rating');
    }

    /** @test */
    public function barang_id_must_exist_in_database()
    {
        // 1. Aksi: Mengirim barang_id yang tidak ada (999)
        $response = $this->actingAs($this->user)->post('/api/rating', [
            'barang_id' => 999, // Gagal
            'rating' => 5,
        ]);

        // 2. Aseri: Error validasi
        $response->assertStatus(422)
            ->assertJsonValidationErrors('barang_id');
    }
}