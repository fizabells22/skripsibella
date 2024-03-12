<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\SalesAchReport;
use App\Models\SalesReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        return view('report');
    }

    public function import(Request $request)
    {
        $request->validate([
            'csvfile' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csvfile');
        $data = array_map('str_getcsv', file($file->getRealPath()));

            foreach ($data as $row) {
                Report::create([
                    'bulan' => $row[0],
                    'customer_id' => $row[1],
                    'customer' => $row[2],
                    'sales_representative' => $row[3],
                    'brand' => $row[4],
                    'product_status_lifecycle' => $row[5],
                    'product' => $row[6],
                    'delivered_nominal_bruto_incppn' => (int)$row[7],
                ]);
            }
                return redirect()->route('report');
        }   

    //     // Mulai iterasi dari baris kedua karena baris pertama berisi judul kolom
    //     for ($i = 1; $i < count($data); $i++) {
    //         $row = $data[$i];
    //         if (count($row) >= 3) {
    //             $columnName = strtolower(trim($row[2])); // assuming column index starts from 0
    //             if ($columnName === 'target_all_brand') {
    //                 $this->insertToSalesAch($row);
    //             } elseif ($columnName === '%_absensi') {
    //                 $this->insertToSalesReport($row);
    //             } elseif ($columnName === 'sales_representative') {
    //                 $this->insertToReport($row);
    //             }
    //         }
    //     }
    //     return redirect()->back()->with('success', 'CSV data has been imported successfully.');
    // }

    // private function insertToReport($row)
    // {
    //     Report::create([
    //         'bulan' => $row[0],
    //         'customer_id' => $row[1],
    //         'customer' => $row[2],
    //         'sales_representative' => $row[3],
    //         'brand' => $row[4],
    //         'product_status_lifecycle' => $row[5],
    //         'product' => $row[6],
    //         'delivered_nominal_bruto_incppn' => (int)$row[7],
    //     ]);
    // }

    // private function insertToSalesAch($row)
    // {
    //     SalesAchReport::create([
    //         'dc' => $row[0],
    //         'sales_name' => $row[1],
    //         'sales_category' => $row[2],
    //         'target_all_brand' => (int)$row[3],
    //         'ach_all_brand' => (int)$row[4],
    //         'all_brand_%' => (double)$row[5],
    //         'target_wardah' => (int)$row[6],
    //         'ach_wardah' => (int)$row[7],
    //         'wardah_%' => (double)$row[8],
    //         'target_mo' => (int)$row[9],
    //         'ach_mo' => (int)$row[10],
    //         'mo_%' => (double)$row[11],
    //         'target_emina' => (int)$row[12],
    //         'ach_emina' => (int)$row[13],
    //         'emina_%' => (double)$row[14],
    //         'target_putri' => (int)$row[15],
    //         'ach_putri' => (int)$row[16],
    //         'putri_%' => (double)$row[17],
    //         'target_kahf' => (int)$row[18],
    //         'ach_kahf' => (int)$row[19],
    //         'kahf_%' => (double)$row[20],
    //         'target_ip' => (int)$row[21],
    //         'ach_ip' => (int)$row[22],
    //         'ip_%' => (double)$row[23],
    //         'target_cl' => (int)$row[24],
    //         'ach_cl' => (int)$row[25],
    //         'cl_%' => (double)$row[26],
    //         'target_biodef' => (int)$row[27],
    //         'ach_biodef' => (int)$row[28],
    //         'biodef_%' => (double)$row[29],
    //         'target_omg' => (int)$row[30],
    //         'ach_omg' => (int)$row[31],
    //         'omg_%' => (double)$row[32],
    //         'target_wonderly' => (int)$row[33],
    //         'ach_wonderly' => (int)$row[34],
    //         'wonderly_%' => (double)$row[35],
    //         'target_labore' => (int)$row[36],
    //         'ach_labore' => (int)$row[37],
    //         'labore_%' => (double)$row[38],
    //         'target_tavi' => (int)$row[39],
    //         'ach_tavi' => (int)$row[40],
    //         'tavi_%' => (double)$row[41],
    //     ]);
    // }

    // private function insertToSalesReport($row)
    // {
    //     SalesReport::create([
    //         'dc' => $row[0],
    //         'sales_name' => $row[1],
    //         'sales_category' => $row[2],
    //         '%_absensi' => (double)$row[3],
    //         'target_coverage' => (int)$row[4],
    //         'actual_coverage' => (int)$row[5],
    //         'act/tar_coverage _%' => (double)$row[6],
    //         'jumlah_rao' => (int)$row[7],
    //         '%_rao' => (int)$row[8],
    //         'plan_call' => (double)$row[9],
    //         'actual_call' => (int)$row[10],
    //         'act/plan_call_%' => (int)$row[11],
    //         'target_ecall' => (double)$row[12],
    //         'actual_ecall' => (int)$row[13],
    //         'act/plan_ecall_%' => (int)$row[14],
    //     ]);
    // }
}
