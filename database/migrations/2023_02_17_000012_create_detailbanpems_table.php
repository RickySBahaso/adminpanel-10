<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailbanpemsTable extends Migration
{
    public function up()
    {
        Schema::create('detailbanpems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
