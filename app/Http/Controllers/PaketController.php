<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Barang;

class PaketController extends Controller
{
    // Tampil list paket dan barang (index)
    public function index()
    {
        $barangs = Barang::all();
        $pakets  = Paket::with('items')->get();
        return view('admin.paket', compact('barangs', 'pakets'));
    }

    // Form tambah paket
    public function create()
    {
        $barangs = Barang::all();
        return view('admin.create', compact('barangs'));
    }

    // Simpan data paket baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'items' => 'required|array',
            'price' => 'required|numeric|min:0',
        ]);

        $paket = Paket::create([
            'name'  => $data['name'],
            'price' => $data['price'],
        ]);

        $paket->items()->sync($data['items']);

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    // Form edit paket
    public function edit($id)
{
    $paket = Paket::with('items')->findOrFail($id);
    return response()->json([
        'id' => $paket->id,
        'name' => $paket->name,
        'price' => $paket->price,
        'items' => $paket->items->pluck('id')
    ]);
}



    // Update data paket
    public function update(Request $request, $id)
    {
        $paket = Paket::findOrFail($id);

        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'items' => 'required|array',
            'price' => 'required|numeric|min:0',
        ]);

        $paket->update([
            'name'  => $data['name'],
            'price' => $data['price'],
        ]);

        $paket->items()->sync($data['items']);

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    // Hapus paket
    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paket->delete();

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
