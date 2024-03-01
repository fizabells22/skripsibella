<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['dc','sales_name','sales_category','%_absensi','target_coverage','actual_coverage','act/tar_coverage _%','jumlah_rao	%_rao','plan_call','actual_call', 'act/plan_call_%','target_ecall','actual_ecall','act/plan_ecall_%'];
}
