<?php

namespace Tests\Feature\Auth;  // NAMESPACE DIPERBAIKI

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function halaman_registrasi_dapat_diakses()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        // Opsional: assert element form
        // $response->assertSee('Register');
        // $response->assertSee('Name');
        // $response->assertSee('Email');
    }

    /** @test */
    public function pengguna_baru_dapat_mendaftar()
    {
        $response = $this->post('/register', [
            'name' => 'User Baru',
            'email' => 'userbaru@example.com',
            'password' => 'Password123!', // Password lebih kuat
            'password_confirmation' => 'Password123!',
        ]);

        $this->assertAuthenticated();
        
        // SESUAIKAN DENGAN REDIRECT APLIKASI ANDA
        // Pilihan berdasarkan test login sebelumnya:
        $response->assertRedirect('/index'); 
        // ATAU jika ada route name:
        // $response->assertRedirect(route('home'));
        
        // VERIFIKASI DATA DI DATABASE
        $this->assertDatabaseHas('users', [
            'email' => 'userbaru@example.com',
            'name' => 'User Baru'
        ]);
    }

    /** @test */
    public function konfirmasi_password_harus_sesuai()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'test@example.com',
            'password' => 'Password123!',
            'password_confirmation' => 'DifferentPassword!', // Tidak match
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest();
        $this->assertDatabaseCount('users', 0); // Tidak ada user yang dibuat
    }

    /** @test */
    public function email_harus_unik()
    {
        User::factory()->create(['email' => 'existing@example.com']);

        $response = $this->post('/register', [
            'name' => 'User Lain',
            'email' => 'existing@example.com', // Email sudah terdaftar
            'password' => 'Password123!',
            'password_confirmation' => 'Password123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function semua_field_wajib_diisi()
    {
        $response = $this->post('/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
        $this->assertGuest();
    }

    /** @test */
    public function email_harus_berformat_valid()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'invalid-email-format',
            'password' => 'Password123!',
            'password_confirmation' => 'Password123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function password_minimal_8_karakter()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'short', // Password terlalu pendek
            'password_confirmation' => 'short',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest();
    }
}