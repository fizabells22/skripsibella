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
        Schema::create('sales_achs', function (Blueprint $table) {
            $table->string('dc');
            $table->string('sales_name');
            $table->string('sales_category');
            $table->integer('target_all_brand');
            $table->integer('ach_all_brand');
            $table->double('all_brand_%');
            $table->integer('target_wardah');
            $table->integer('ach_wardah');
            $table->double('wardah_%');
            $table->integer('target_mo');
            $table->integer('ach_mo');
            $table->double('mo_%');
            $table->integer('target_emina');
            $table->integer('ach_emina');
            $table->double('emina_%');
            $table->integer('target_putri');
            $table->integer('ach_putri');
            $table->double('putri_%');
            $table->integer('target_kahf');
            $table->integer('ach_kahf');
            $table->double('kahf_%');
            $table->integer('target_ip');
            $table->integer('ach_ip');
            $table->double('ip_%');
            $table->integer('target_cl');
            $table->integer('ach_cl');
            $table->double('cl_%');
            $table->integer('target_biodef');
            $table->integer('ach_biodef');
            $table->double('biodef_%');
            $table->integer('target_omg');
            $table->integer('ach_omg');
            $table->double('omg_%');
            $table->integer('target_wonderly');
            $table->integer('ach_wonderly');
            $table->double('wonderly_%');
            $table->integer('target_labore');
            $table->integer('ach_labore');
            $table->double('labore_%');
            $table->integer('target_tavi');
            $table->integer('ach_tavi');
            $table->double('tavi_%');
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
        Schema::dropIfExists('sales_achs');
    }
};
