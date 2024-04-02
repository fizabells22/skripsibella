<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Scoreboards extends Model
{
    use HasFactory;
    protected $fillable = ['scoreboard_id','%_absensis','target_coverages','actual_coverages','act/tar_coverages_%','jumlahh_rao','%_raao','plan_calls','actual_calls', 'act/plan_calls_%','target_ecalls','actual_ecalls','act/plan_ecalls_%','sales_id'];
}
