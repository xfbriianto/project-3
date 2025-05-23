<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // model buat tabel produk/barang

class ProdukController extends Controller
{

    public function index()
    {
        // Ambil semua data produk (barangs) dengan paginasi, misal 12 item per halaman
        $barangs = Barang::orderBy('created_at', 'desc')->paginate(12);

        // Kirim data ke view 'produk.index'
        return view('produk.index', compact('barangs'));
    }
    public function cari(Request $request)
    {
        // Ambil keyword pencarian dari query string (input name="q")
        $keyword = $request->input('q');

        // Validasi sederhana (optional)
        // $request->validate([
        //     'q' => 'required|string|min:2'
        // ]);

        // Query ke database: cari di kolom ‘name’ (atau bisa ditambah kolom lain)
        // Contoh: search by nama barang
        $barangs = Barang::where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('description', 'LIKE', "%{$keyword}%") // opsional: cari di deskripsi juga
            ->paginate(12); // misal paginasi 12 item per halaman

        // Kembaliin ke view yang sama (atau view khusus kalau mau)
        return view('produk.index', compact('barangs'))
            ->with('keyword', $keyword);
    }

    public function show($id)
{
    $barang = Barang::findOrFail($id);
    return view('produk.detail', compact('barang'));
}

}

