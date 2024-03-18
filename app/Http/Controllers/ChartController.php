<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function tampilkanChart()
    {
        // Mengambil data dari model Report
        $reports = Report::select('product', 'delivered_nominal_bruto_incppn')->get();

        // Menyiapkan array untuk menyimpan data nama produk dan nominal
        $namaProduk = [];
        $nominal = [];

        // Mengisi array dengan data yang diperoleh dari query
        foreach ($reports as $report) {
            $namaProduk[] = $report->product;
            $nominal[] = $report->delivered_nominal_bruto_incppn;
        }

        // Mengirim data ke view 'chart'
        return view('report', compact('namaProduk', 'nominal'));
    }
}
