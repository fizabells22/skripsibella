<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_reports', function (Blueprint $table) {
            $table->string('dc');
            $table->string('sales_name');
            $table->string('sales_category');
            $table->double('%_absensi');
            $table->integer('target_coverage');
            $table->integer('actual_coverage');
            $table->double('act/tar_coverage_%');
            $table->integer('jumlah_rao');
            $table->double('%_rao');
            $table->integer('plan_call');
            $table->integer('actual_call');
            $table->double('act/plan_call_%');
            $table->integer('target_ecall');
            $table->integer('actual_ecall');
            $table->double('act/plan_ecall_%');
            $table->timestamps=false;		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_reports');
    }
};
