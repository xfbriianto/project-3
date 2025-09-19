<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komponen;
use Illuminate\Support\Facades\Storage;

class KomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komponens = Komponen::all();
        return view('admin.komponen.index', compact('komponens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.komponen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('komponen', 'public');
        }

        Komponen::create($validated);
        return redirect()->route('admin.komponen.index')->with('success', 'Komponen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $komponen = Komponen::findOrFail($id);
        return view('admin.komponen.edit', compact('komponen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $komponen = Komponen::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($komponen->gambar) {
                Storage::disk('public')->delete($komponen->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('komponen', 'public');
        }

        $komponen->update($validated);
        return redirect()->route('admin.komponen.index')->with('success', 'Komponen berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $komponen = Komponen::findOrFail($id);
        if ($komponen->gambar) {
            Storage::disk('public')->delete($komponen->gambar);
        }
        $komponen->delete();
        return redirect()->route('admin.komponen.index')->with('success', 'Komponen berhasil dihapus.');
    }
}
