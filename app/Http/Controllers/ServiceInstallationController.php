<?php

namespace App\Http\Controllers;

use App\Models\InstallationRequest;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceInstallationController extends Controller
{
    public function index()
    {
        $requests = InstallationRequest::with(['barang'])
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        // Ambil produk CCTV yang ada di keranjang user saat ini
        $cartItems = CartItem::with('barang')
            ->where('user_id', Auth::id())
            ->get()
            ->map(function ($item) {
                return [
                    'cart_item_id' => $item->id,
                    'barang_id' => $item->barang_id,
                    'barang_name' => optional($item->barang)->name,
                    'quantity' => $item->quantity,
                ];
            });

        return view('service.installation', compact('requests', 'cartItems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:500',
            'formatted_address' => 'nullable|string|max:500',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'installation_date' => 'required|date|after_or_equal:today',
            'location_photo' => 'nullable|image|max:4096',
            'barang_ids' => 'required|array|min:1',
            'barang_ids.*' => 'exists:barangs,id',
            'note' => 'nullable|string',
        ]);

        // Pastikan semua barang yang dipilih ada di keranjang user
        $selectedBarangIds = $validated['barang_ids'];
        $cartBarangIds = CartItem::where('user_id', Auth::id())
            ->pluck('barang_id')
            ->filter()
            ->unique()
            ->all();
        $notInCart = array_values(array_diff($selectedBarangIds, $cartBarangIds));
        if (!empty($notInCart)) {
            return back()->withErrors(['barang_ids' => 'Sebagian pilihan tidak ada di keranjang Anda.'])->withInput();
        }

        $photoPath = null;
        if ($request->hasFile('location_photo')) {
            $photoPath = $request->file('location_photo')->store('installation_photos', 'public');
        }

        foreach ($selectedBarangIds as $barangId) {
            InstallationRequest::create([
                'user_id' => Auth::id(),
                'order_id' => null,
                'order_item_id' => null,
                'barang_id' => $barangId,
                'address' => $validated['address'],
                'formatted_address' => $validated['formatted_address'] ?? null,
                'latitude' => $validated['latitude'] ?? null,
                'longitude' => $validated['longitude'] ?? null,
                'installation_date' => $validated['installation_date'],
                'location_photo_path' => $photoPath,
                'status' => 'pending',
                'note' => $validated['note'] ?? null,
            ]);
        }

        return redirect()->route('service.installation.index')->with('success', 'Permintaan pemasangan berhasil dikirim');
    }
}


