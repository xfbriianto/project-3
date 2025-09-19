<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Barang;

class RatingController extends Controller
{
    /**
     * Simpan atau update rating produk
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:255',
        ]);

        $rating = Rating::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'barang_id' => $request->barang_id,
            ],
            [
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Rating berhasil disimpan',
            'data' => $rating
        ]);
    }

    /**
     * Ambil rating produk tertentu
     */
    public function show($barang_id)
    {
        $barang = Barang::with('ratings.user')->findOrFail($barang_id);

        return response()->json([
            'success' => true,
            'ratings' => $barang->ratings
        ]);
    }

}