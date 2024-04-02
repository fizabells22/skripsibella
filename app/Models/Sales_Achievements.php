<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Achievements extends Model
{
        use HasFactory;
        protected $fillable = ['achievement_id','target_brand','ach_brand','%_brand','sales_id','brand_id'];
}
