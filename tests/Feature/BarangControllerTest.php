<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BarangControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Create admin user
        $this->user = User::factory()->create([
            'role' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Login sebagai admin
        $this->actingAs($this->user);
    }

    /** @test */
    public function admin_dapat_mengakses_halaman_index_barang()
    {
        $response = $this->get(route('admin.databarang.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.barang.index');
        $response->assertViewHas(['barangs', 'pakets']);
    }

    /** @test */
    public function admin_dapat_menambah_barang_cctv_indoor()
    {
        Storage::fake('public');

        $data = [
            'name' => 'CCTV Indoor HD 1080p',
            'category' => 'CCTV Indoor',
            'stock' => 15,
            'price' => 850000,
            'description' => 'CCTV indoor resolution tinggi dengan night vision',
            'image' => UploadedFile::fake()->image('cctv-indoor.jpg')
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'CCTV Indoor HD 1080p',
            'category' => 'CCTV Indoor',
            'stock' => 15,
            'price' => 850000,
            'description' => 'CCTV indoor resolution tinggi dengan night vision'
        ]);

        $barang = Barang::first();
        $this->assertNotNull($barang->image);
        Storage::disk('public')->assertExists($barang->image);
    }

    /** @test */
    public function admin_dapat_menambah_barang_cctv_outdoor()
    {
        $data = [
            'name' => 'CCTV Outdoor Weatherproof',
            'category' => 'CCTV Outdoor',
            'stock' => 20,
            'price' => 1200000,
            'description' => 'CCTV outdoor tahan cuaca dengan IP66 rating'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'CCTV Outdoor Weatherproof',
            'category' => 'CCTV Outdoor',
            'stock' => 20,
            'price' => 1200000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_ip_camera()
    {
        $data = [
            'name' => 'IP Camera 4MP',
            'category' => 'IP Camera',
            'stock' => 8,
            'price' => 1500000,
            'description' => 'IP Camera 4 megapixel dengan POE support'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'IP Camera 4MP',
            'category' => 'IP Camera',
            'stock' => 8,
            'price' => 1500000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_dvr_nvr()
    {
        $data = [
            'name' => 'NVR 8 Channel',
            'category' => 'DVR/NVR',
            'stock' => 5,
            'price' => 2500000,
            'description' => 'Network Video Recorder 8 channel dengan H.265 compression'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'NVR 8 Channel',
            'category' => 'DVR/NVR',
            'stock' => 5,
            'price' => 2500000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_aksesoris_cctv()
    {
        $data = [
            'name' => 'Kabel CCTV RG59',
            'category' => 'Aksesoris',
            'stock' => 100,
            'price' => 15000,
            'description' => 'Kabel coaxial RG59 untuk instalasi CCTV'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'Kabel CCTV RG59',
            'category' => 'Aksesoris',
            'stock' => 100,
            'price' => 15000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_elektronik_terkait()
    {
        $data = [
            'name' => 'Power Supply 12V 2A',
            'category' => 'Elektronik',
            'stock' => 30,
            'price' => 75000,
            'description' => 'Power supply untuk CCTV dan perangkat elektronik lainnya'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'Power Supply 12V 2A',
            'category' => 'Elektronik',
            'stock' => 30,
            'price' => 75000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_perkakas_instalasi()
    {
        $data = [
            'name' => 'Drill Set',
            'category' => 'Perkakas',
            'stock' => 10,
            'price' => 350000,
            'description' => 'Perkakas untuk instalasi CCTV dan jaringan'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'Drill Set',
            'category' => 'Perkakas',
            'stock' => 10,
            'price' => 350000,
        ]);
    }

    /** @test */
    public function admin_dapat_menambah_barang_material_instalasi()
    {
        $data = [
            'name' => 'Dome Housing',
            'category' => 'Material',
            'stock' => 25,
            'price' => 50000,
            'description' => 'Housing dome untuk CCTV indoor'
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertRedirect(route('admin.databarang.index'));
        $response->assertSessionHas('success', 'Barang berhasil ditambahkan');

        $this->assertDatabaseHas('barangs', [
            'name' => 'Dome Housing',
            'category' => 'Material',
            'stock' => 25,
            'price' => 50000,
        ]);
    }

    /** @test */
    public function nama_barang_wajib_diisi()
    {
        $data = [
            'name' => '',
            'category' => 'CCTV Indoor',
            'stock' => 10,
            'price' => 1500000,
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasErrors('name');
        $this->assertDatabaseCount('barangs', 0);
    }

    /** @test */
    public function category_wajib_diisi_dan_valid_dari_kategori_cctv()
    {
        $data = [
            'name' => 'Test Barang',
            'category' => 'Invalid Category',
            'stock' => 10,
            'price' => 1500000,
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasErrors('category');
        $this->assertDatabaseCount('barangs', 0);
    }

    /** @test */
    public function stock_wajib_diisi_dan_minimal_0()
    {
        $data = [
            'name' => 'CCTV Test',
            'category' => 'CCTV Outdoor',
            'stock' => -5,
            'price' => 1500000,
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasErrors('stock');
        $this->assertDatabaseCount('barangs', 0);
    }

    /** @test */
    public function price_wajib_diisi_dan_minimal_0()
    {
        $data = [
            'name' => 'CCTV Test',
            'category' => 'IP Camera',
            'stock' => 10,
            'price' => -1000,
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasErrors('price');
        $this->assertDatabaseCount('barangs', 0);
    }

    /** @test */
    public function gambar_hanya_boleh_format_jpeg_png_jpg_untuk_produk_cctv()
    {
        Storage::fake('public');

        $data = [
            'name' => 'CCTV HD',
            'category' => 'CCTV Indoor',
            'stock' => 10,
            'price' => 1500000,
            'image' => UploadedFile::fake()->create('document.pdf', 1000)
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasErrors('image');
        $this->assertDatabaseCount('barangs', 0);
    }

    /** @test */
    public function semua_kategori_cctv_dan_terkait_dapat_digunakan()
    {
        $validCategories = [
            'Elektronik',
            'Perkakas', 
            'Material',
            'Aksesoris',
            'CCTV Indoor',
            'CCTV Outdoor',
            'IP Camera',
            'DVR/NVR'
        ];

        foreach ($validCategories as $category) {
            $data = [
                'name' => "Produk $category",
                'category' => $category,
                'stock' => 10,
                'price' => 100000,
            ];

            $response = $this->post(route('admin.databarang.store'), $data);
            $response->assertSessionHasNoErrors();
            
            $this->assertDatabaseHas('barangs', [
                'name' => "Produk $category",
                'category' => $category
            ]);

            // Hapus barang untuk test berikutnya
            Barang::truncate();
        }
    }

    /** @test */
    public function deskripsi_dapat_dikosongkan_untuk_produk_cctv()
    {
        $data = [
            'name' => 'CCTV Basic',
            'category' => 'CCTV Outdoor',
            'stock' => 5,
            'price' => 500000,
            'description' => ''
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('barangs', [
            'name' => 'CCTV Basic',
            'description' => ''
        ]);
    }

    /** @test */
    public function hanya_admin_yang_dapat_menambah_barang_cctv()
    {
        // Logout admin
        $this->post('/logout');

        // Create regular user
        $user = User::factory()->create([
            'role' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('password123'),
        ]);

        $this->actingAs($user);

        $data = [
            'name' => 'CCTV Unauthorized',
            'category' => 'CCTV Indoor',
            'stock' => 10,
            'price' => 1500000,
        ];

        $response = $this->post(route('admin.databarang.store'), $data);

        // User biasa seharusnya tidak bisa mengakses
        $response->assertStatus(403); // Forbidden atau redirect ke login
        $this->assertDatabaseCount('barangs', 0);
    }
}