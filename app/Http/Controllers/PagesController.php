<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboardracing(){
        return view('dashboard1');
    }
    public function dashboardsales(){
        return view('dashboard2');
    }
    public function getDownload()
{
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "/download/templatereport.csv";

    $headers = array(
              'Content-Type: application/csv',
            );

    return Response::download($file, 'templatereport.csv', $headers);
}
}
