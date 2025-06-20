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
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanPenjualanController extends Controller
{
    /**
     * Menampilkan halaman laporan penjualan
     */
public function index(Request $request)
{
    $query = SalesReport::with('user')->orderBy('transaction_date', 'desc');

    // Jika ada filter status dari request, gunakan
    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }

    // Jika ada filter tanggal
    if ($request->filled('start_date')) {
        $query->whereDate('transaction_date', '>=', $request->start_date);
    }
    if ($request->filled('end_date')) {
        $query->whereDate('transaction_date', '<=', $request->end_date);
    }

    $laporan = $query->paginate(15);

    return view('admin.laporan-penjualan', compact('laporan'));
}

    /**
     * Menampilkan detail penjualan
     */
    public function detail($id)
    {
        $report = SalesReport::with(['user', 'orderItems.barang'])->findOrFail($id);
        
        $html = view('admin.laporan-detail', compact('report'))->render();
        
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }

    /**
     * Export laporan ke Excel
     */
    public function exportExcel(Request $request)
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

        $reports = $query->orderBy('transaction_date', 'desc')->get();

        // Buat spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan Penjualan');

        // Header
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Order ID');
        $sheet->setCellValue('C1', 'Pelanggan');
        $sheet->setCellValue('D1', 'Total');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Tanggal Transaksi');

        // Style header
        $headerStyle = [
            'font' => ['bold' => true],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['rgb' => 'E2E8F0']
            ]
        ];
        $sheet->getStyle('A1:F1')->applyFromArray($headerStyle);

        // Data
        $row = 2;
        foreach ($reports as $report) {
            $sheet->setCellValue('A' . $row, $report->id);
            $sheet->setCellValue('B' . $row, $report->order_id);
            $sheet->setCellValue('C' . $row, optional($report->user)->name ?? '-');
            $sheet->setCellValue('D' . $row, 'Rp ' . number_format($report->total, 0, ',', '.'));
            $sheet->setCellValue('E' . $row, ucfirst($report->status));
            $sheet->setCellValue('F' . $row, $report->transaction_date ? Carbon::parse($report->transaction_date)->format('d/m/Y H:i') : '-');
            $row++;
        }

        // Auto-size columns
        foreach (range('A', 'F') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Buat writer
        $writer = new Xlsx($spreadsheet);

        // Set headers untuk download
        $filename = 'laporan-penjualan-' . date('Y-m-d') . '.xlsx';
        
        return response()->streamDownload(function() use ($writer) {
            $writer->save('php://output');
        }, $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }

    /**
     * Export laporan ke PDF
     */
    public function exportPDF(Request $request)
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

        $reports = $query->orderBy('transaction_date', 'desc')->get();
        
        $pdf = Pdf::loadView('admin.laporan-pdf', compact('reports', 'request'));
        
        $filename = 'laporan-penjualan-' . date('Y-m-d') . '.pdf';
        
        return $pdf->download($filename);
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