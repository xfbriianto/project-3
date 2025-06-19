<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Carbon\Carbon;
use App\Models\Barang; // Tambahkan ini
use App\Models\SalesReport;

class LaporanPenjualanController extends Controller
{
    /**
     * Menampilkan halaman laporan penjualan
     */
    public function index(Request $request)
    {
        $query = SalesReport::with('user');

        // Filter tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('transaction_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('transaction_date', '<=', $request->end_date);
        }
        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $reports = $query->orderBy('transaction_date', 'desc')->paginate(15);

        return view('admin.laporan-penjualan', compact('reports'));
    }
    /**
     * Mengunduh laporan penjualan sebagai file Excel
     */
    public function downloadExcel(Request $request)
    {
        $query = SalesReport::with('user');

        // Filter tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('transaction_date', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('transaction_date', '<=', $request->end_date);
        }
        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $reports = $query->get();

        // Buat spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan Penjualan');

        // Header
        $sheet->setCellValue('A1', 'ID Order');
        $sheet->setCellValue('B1', 'User');
        $sheet->setCellValue('C1', 'Total');
        $sheet->setCellValue('D1', 'Status');
        $sheet->setCellValue('E1', 'Tanggal Transaksi');

        // Data
        $row = 2;
        foreach ($reports as $report) {
            $sheet->setCellValue('A' . $row, $report->id);
            $sheet->setCellValue('B' . $row, $report->user->name);
            $sheet->setCellValue('C' . $row, $report->total);
            $sheet->setCellValue('D' . $row, $report->status);
            $sheet->setCellValue('E' . $row, $report->transaction_date);
            $row++;
        }

        // Buat writer
        $writer = new Xlsx($spreadsheet);

        // Download
        $filename = 'laporan-penjualan-' . date('Y-m-d') . '.xlsx';
        return $writer->save('php://output', $filename);
    }
}
