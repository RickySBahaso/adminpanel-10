<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPagusTable extends Migration
{
    public function up()
    {
        Schema::create('detail_pagus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_akun')->nullable();
            $table->string('program')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('kro')->nullable();
            $table->decimal('pagu', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
