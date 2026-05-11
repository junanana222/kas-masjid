<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranSosialTable extends Migration
{
    public function up()
    {
        Schema::create('pengeluaran_sosial', function (Blueprint $table) {

            $table->bigIncrements('pengeluaran_id');

            $table->string('kategori');
            $table->string('uraian');

            $table->bigInteger('nominal');

            $table->date('tanggal');

            $table->text('deskripsi')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('pengeluaran_sosial');
    }
}