<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('admin.databarang', compact('barangs'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Elektronik,Perkakas,Material',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string'
        ]);
        Barang::create($data);
        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Elektronik,Perkakas,Material',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string'
        ]);
        $barang = Barang::findOrFail($id);
        // Validasi dan update data
        $barang->update($request->all());
        // Redirect atau response
        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('admin.databarang')->with('success', 'Barang berhasil dihapus');
    }
}
