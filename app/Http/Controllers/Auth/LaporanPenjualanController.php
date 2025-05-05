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

class LaporanPenjualanController extends Controller
{
    /**
     * Menampilkan halaman laporan penjualan
     */
    public function index(Request $request)
    {
        $query = Order::with(['user', 'items.barang']);

        // Filter berdasarkan tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }

        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Ambil data transaksi dengan pagination
        $orders = $query->latest()->paginate(15);

        // Hitung statistik untuk ditampilkan di dashboard
        $totalPenjualan = $this->calculateTotalSales($request);
        $jumlahTransaksi = $this->calculateTotalTransactions($request);
        $produkTerjual = $this->calculateTotalProductsSold($request);
        $rataRataPenjualan = $jumlahTransaksi > 0 ? ($totalPenjualan / $jumlahTransaksi) : 0;

        return view('admin.laporan-penjualan', compact(
            'orders',
            'totalPenjualan',
            'jumlahTransaksi',
            'produkTerjual',
            'rataRataPenjualan'
        ));
    }

    /**
     * Export laporan penjualan ke Excel
     */
    public function exportExcel(Request $request)
    {
        // Buat spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set judul kolom
        $sheet->setCellValue('A1', 'LAPORAN PENJUALAN CCTV');
        $sheet->mergeCells('A1:G1');
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('A1')->getFont()->setSize(14);
        
        // Filter yang digunakan
        $sheet->setCellValue('A3', 'Filter:');
        $sheet->getStyle('A3')->getFont()->setBold(true);
        
        $startDate = $request->filled('start_date') ? Carbon::parse($request->start_date)->format('d/m/Y') : 'Semua';
        $endDate = $request->filled('end_date') ? Carbon::parse($request->end_date)->format('d/m/Y') : 'Semua';
        $status = $request->filled('status') ? ucfirst($request->status) : 'Semua';
        
        $sheet->setCellValue('A4', 'Tanggal:');
        $sheet->setCellValue('B4', "$startDate s/d $endDate");
        $sheet->setCellValue('A5', 'Status:');
        $sheet->setCellValue('B5', $status);
        
        // Header tabel
        $sheet->setCellValue('A7', 'ID Pesanan');
        $sheet->setCellValue('B7', 'Tanggal');
        $sheet->setCellValue('C7', 'Pelanggan');
        $sheet->setCellValue('D7', 'Produk');
        $sheet->setCellValue('E7', 'Qty');
        $sheet->setCellValue('F7', 'Harga');
        $sheet->setCellValue('G7', 'Total');
        $sheet->setCellValue('H7', 'Status');
        
        // Style header
        $headerStyle = [
            'font' => ['bold' => true],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'E2EFDA'],
            ],
        ];
        
        $sheet->getStyle('A7:H7')->applyFromArray($headerStyle);
        
        // Ambil data
        $query = Order::with(['user', 'items.barang']);
        
        // Filter berdasarkan tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
        
        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        $orders = $query->latest()->get();
        
        // Isi data
        $row = 8;
        foreach ($orders as $order) {
            $rowStart = $row;
            
            foreach ($order->items as $index => $item) {
                $sheet->setCellValue('A' . $row, '#' . $order->id);
                $sheet->setCellValue('B' . $row, $order->created_at->format('d/m/Y H:i'));
                $sheet->setCellValue('C' . $row, $order->user->name);
                $sheet->setCellValue('D' . $row, $item->barang ? $item->barang->name : '-');
                $sheet->setCellValue('E' . $row, $item->quantity);
                $sheet->setCellValue('F' . $row, $item->price);
                
                if ($index === 0) {
                    $sheet->setCellValue('G' . $row, $order->total);
                    
                    // Status
                    $statusText = '';
                    switch ($order->status) {
                        case 'completed':
                            $statusText = 'Selesai';
                            break;
                        case 'pending':
                            $statusText = 'Pending';
                            break;
                        case 'processing':
                            $statusText = 'Diproses';
                            break;
                        case 'cancelled':
                            $statusText = 'Dibatalkan';
                            break;
                    }
                    
                    $sheet->setCellValue('H' . $row, $statusText);
                }
                
                $row++;
            }
            
            // Jika pesanan memiliki lebih dari 1 item, merge cell yang sama
            if (count($order->items) > 1) {
                $rowEnd = $row - 1;
                $sheet->mergeCells('A' . $rowStart . ':A' . $rowEnd);
                $sheet->mergeCells('B' . $rowStart . ':B' . $rowEnd);
                $sheet->mergeCells('C' . $rowStart . ':C' . $rowEnd);
                $sheet->mergeCells('G' . $rowStart . ':G' . $rowEnd);
                $sheet->mergeCells('H' . $rowStart . ':H' . $rowEnd);
                
                // Vertical align tengah untuk cell yang di-merge
                $sheet->getStyle('A' . $rowStart . ':A' . $rowEnd)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                $sheet->getStyle('B' . $rowStart . ':B' . $rowEnd)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                $sheet->getStyle('C' . $rowStart . ':C' . $rowEnd)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                $sheet->getStyle('G' . $rowStart . ':G' . $rowEnd)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                $sheet->getStyle('H' . $rowStart . ':H' . $rowEnd)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
            }
        }
        
        // Style untuk seluruh data
        $sheet->getStyle('A8:H' . ($row - 1))->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ]);
        
        // Format angka untuk kolom harga
        $sheet->getStyle('F8:G' . ($row - 1))->getNumberFormat()->setFormatCode('#,##0');
        
        // Auto-size kolom
        foreach (range('A', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        // Tambahkan ringkasan data
        $row += 2;
        $sheet->setCellValue('A' . $row, 'RINGKASAN');
        $sheet->mergeCells('A' . $row . ':H' . $row);
        $sheet->getStyle('A' . $row)->getFont()->setBold(true);
        
        $row++;
        $sheet->setCellValue('A' . $row, 'Total Penjualan:');
        $sheet->setCellValue('B' . $row, $this->calculateTotalSales($request));
        $sheet->getStyle('B' . $row)->getNumberFormat()->setFormatCode('#,##0');
        
        $row++;
        $sheet->setCellValue('A' . $row, 'Jumlah Transaksi:');
        $sheet->setCellValue('B' . $row, $this->calculateTotalTransactions($request));
        
        $row++;
        $sheet->setCellValue('A' . $row, 'Produk Terjual:');
        $sheet->setCellValue('B' . $row, $this->calculateTotalProductsSold($request));
        
        $row++;
        $totalTransactions = $this->calculateTotalTransactions($request);
        $rataRata = $totalTransactions > 0 ? ($this->calculateTotalSales($request) / $totalTransactions) : 0;
        $sheet->setCellValue('A' . $row, 'Rata-rata Penjualan:');
        $sheet->setCellValue('B' . $row, $rataRata);
        $sheet->getStyle('B' . $row)->getNumberFormat()->setFormatCode('#,##0');
        
        // Set nama file
        $fileName = 'laporan_penjualan_' . date('YmdHis') . '.xlsx';
        
        // Create response dan redirect browser ke file Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit();
    }

    /**
     * Menghitung total penjualan berdasarkan filter
     */
    private function calculateTotalSales(Request $request)
    {
        $query = Order::query();
        
        // Filter berdasarkan tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
        
        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        return $query->sum('total');
    }

    /**
     * Menghitung jumlah transaksi berdasarkan filter
     */
    private function calculateTotalTransactions(Request $request)
    {
        $query = Order::query();
        
        // Filter berdasarkan tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
        
        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        return $query->count();
    }

    /**
     * Menghitung jumlah produk terjual berdasarkan filter
     */
    private function calculateTotalProductsSold(Request $request)
    {
        $query = OrderItem::query()
            ->join('orders', 'order_items.order_id', '=', 'orders.id');
        
        // Filter berdasarkan tanggal
        if ($request->filled('start_date')) {
            $query->whereDate('orders.created_at', '>=', $request->start_date);
        }
        
        if ($request->filled('end_date')) {
            $query->whereDate('orders.created_at', '<=', $request->end_date);
        }
        
        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('orders.status', $request->status);
        }
        
        return $query->sum('order_items.quantity');
    }
}