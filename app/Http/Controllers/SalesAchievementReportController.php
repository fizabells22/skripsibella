<?php

namespace App\Http\Controllers;
use App\Models\SalesAchReport;
use Illuminate\Http\Request;

class SalesAchievementReportController extends Controller
{
    public function report(Request $request){
        return view('report');
    }
    public function importsalesach(Request $request)
    {
        $request->validate([
            'csvfile' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csvfile');

        $filePath = $file->storeAs('csvfiles', $file->getClientOriginalName());

        $data = array_map('str_getcsv', file(storage_path('app/' . $filePath)));

        foreach ($data as $row) {
            Report::create([
                'dc' => $row[0],
                'sales_name' => $row[1],
                'sales_category' => $row[2],
                'target_all_brand' => (int)$row[3],
                'ach_all_brand' => (int)$row[4],
                'all_brand_%' => (double)$row[5],
                'target_wardah' => (int)$row[6],
                'ach_wardah' => (int)$row[7],
                'wardah_%' => (double)$row[8],
                'target_mo' => (int)$row[9],
                'ach_mo' => (int)$row[10],
                'mo_%' => (double)$row[11],
                'target_emina' => (int)$row[12],
                'ach_emina' => (int)$row[13],
                'emina_%' => (double)$row[14],
                'target_putri' => (int)$row[15],
                'ach_putri' => (int)$row[16],
                'putri_%' => (double)$row[17],
                'target_kahf' => (int)$row[18],
                'ach_kahf' => (int)$row[19],
                'kahf_%' => (double)$row[20],
                'target_ip' => (int)$row[21],
                'ach_ip' => (int)$row[22],
                'ip_%' => (double)$row[23],
                'target_cl' => (int)$row[24],
                'ach_cl' => (int)$row[25],
                'cl_%' => (double)$row[26],
                'target_biodef' => (int)$row[27],
                'ach_biodef' => (int)$row[28],
                'biodef_%' => (double)$row[29],
                'target_omg' => (int)$row[30],
                'ach_omg' => (int)$row[31],
                'omg_%' => (double)$row[32],
                'target_wonderly' => (int)$row[33],
                'ach_wonderly' => (int)$row[34],
                'wonderly_%' => (double)$row[35],
                'target_labore' => (int)$row[36],
                'ach_labore' => (int)$row[37],
                'labore_%' => (double)$row[38],
                'target_tavi' => (int)$row[39],
                'ach_tavi' => (int)$row[40],
                'tavi_%' => (double)$row[41],
            ]);
        }
            return redirect()->route('report');
    }   
}
