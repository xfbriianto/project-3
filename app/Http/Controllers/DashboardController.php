<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    $totalStok = Barang::sum('stock');
    $totalPenjualan = Order::where('status', 'completed')->sum('total');

    // Data penjualan per bulan (7 bulan terakhir)
    $penjualanBulanan = Order::select(
            DB::raw('DATE_FORMAT(created_at, "%b %Y") as bulan'),
            DB::raw('SUM(total) as total')
        )
        ->where('status', 'completed')
        ->where('created_at', '>=', now()->subMonths(6)->startOfMonth())
        ->groupBy('bulan')
        ->orderByRaw('MIN(created_at)')
        ->pluck('total', 'bulan')
        ->toArray();

    $labels = [];
    $data = [];
    for ($i = 6; $i >= 0; $i--) {
        $label = now()->subMonths($i)->format('M Y');
        $labels[] = $label;
        $data[] = $penjualanBulanan[$label] ?? 0;
    }

    // Tambahkan ini:
    $penjualanTerbaru = Order::with(['items.barang'])
        ->where('status', 'completed')
        ->latest()
        ->take(10)
        ->get();

    return view('admin.dashboard', compact('totalStok', 'totalPenjualan', 'penjualanTerbaru', 'labels', 'data'));
}
}