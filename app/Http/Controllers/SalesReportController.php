<?php

namespace App\Http\Controllers;
use App\Models\SalesReport;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function salesscore(Request $request){
        return view('salesscore');
    }
    public function importsales(Request $request)
    {
        $request->validate([
            'csvfile' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csvfile');

        $filePath = $file->storeAs('csvfiles', $file->getClientOriginalName());

        $data = array_map('str_getcsv', file(storage_path('app/' . $filePath)));

        foreach ($data as $row) {
            SalesReport::create([
                'dc' => $row[0],
                'sales_name' => $row[1],
                'sales_category' => $row[2],
                '%_absensi' => (double)$row[3],
                'target_coverage' => (int)$row[4],
                'actual_coverage' => (int)$row[5],
                'act/tar_coverage_%' => (double)$row[6],
                'jumlah_rao' => (int)$row[7],
                '%_rao' => (int)$row[8],
                'plan_call' => (double)$row[9],
                'actual_call' => (int)$row[10],
                'act/plan_call_%' => (int)$row[11],
                'target_ecall' => (double)$row[12],
                'actual_ecall' => (int)$row[13],
                'act/plan_ecall_%' => (int)$row[14],
            ]);
        }
            return redirect()->route('salesscore');
    }   
}
