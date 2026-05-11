<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasukanSosialTable extends Migration
{
    public function up()
    {
        Schema::create('pemasukan_sosial', function (Blueprint $table) {

            $table->bigIncrements('pemasukan_id');

            $table->unsignedBigInteger('donatur_id');

            $table->string('kategori');
            $table->string('uraian');

            $table->bigInteger('nominal');

            $table->date('tanggal');

            $table->text('deskripsi')->nullable();

            $table->timestamps();

            $table->foreign('donatur_id')
                  ->references('donatur_id')
                  ->on('donatur')
                  ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('pemasukan_sosial');
    }
}