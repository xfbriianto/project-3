<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $pakets = Paket::with('items')->get();
        return view('admin.databarang', compact('barangs', 'pakets'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Elektronik,Perkakas,Material,Aksesoris,CCTV Indoor,CCTV Outdoor,IP Camera,DVR/NVR',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle upload file
        $barang = new Barang($data);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('barang', 'public');
            $barang->image = $imagePath;
        }
        $barang->save();

        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
           'category' => 'required|in:Elektronik,Perkakas,Material,Aksesoris,CCTV Indoor,CCTV Outdoor,IP Camera,DVR/NVR',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle upload file
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($barang->image && Storage::disk('public')->exists($barang->image)) {
                Storage::disk('public')->delete($barang->image);
            }
            $imagePath = $request->file('image')->store('barang', 'public');
            $barang->image = $imagePath;
        } elseif ($request->has('current_image')) {
            // Pertahankan gambar saat ini jika tidak ada upload baru
            $barang->image = $request->current_image;
        }

        $barang->update($data);
        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        // Hapus gambar jika ada
        if ($barang->image && Storage::disk('public')->exists($barang->image)) {
            Storage::disk('public')->delete($barang->image);
        }
        $barang->delete();
        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil dihapus!');
    }

      public function bulkDestroy(Request $request)
    {
        $ids = $request->input('ids', []); // array id yg dikirim
        if (count($ids) > 0) {
            Barang::whereIn('id', $ids)->delete();
            return redirect()->back()->with('success', count($ids) . ' barang berhasil dihapus.');
        }
        return redirect()->back()->with('error', 'Tidak ada barang yang dipilih.');
    }

    public function showPublic(Request $request)
{
    $query = $request->input('q');

    $barangs = Barang::query()
        ->when($query, function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%')
              ->orWhere('category', 'like', '%' . $query . '%')
              ->orWhere('description', 'like', '%' . $query . '%');
        })
        ->get();

    return view('produk.index', compact('produk'));
}

}