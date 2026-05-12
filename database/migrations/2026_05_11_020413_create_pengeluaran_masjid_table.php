<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranMasjidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_masjid', function (Blueprint $table) {
            $table->bigIncrements('pengeluaran_masjid_id');
            $table->foreignId('kategori_id')->references('kategori_id')->on('kategori');
            $table->string('uraian');
            $table->decimal('nominal', 15, 2);
            $table->date('tanggal');
            $table->text('deksripsi')->nullable();
            $table->string('dibuat_oleh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran_masjid');
    }
}
