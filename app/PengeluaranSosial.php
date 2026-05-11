<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengeluaranSosial extends Model
{
    protected $table = 'pengeluaran_sosial';

    protected $primaryKey = 'pengeluaran_id';

    protected $fillable = [
        'kategori',
        'uraian',
        'nominal',
        'tanggal',
        'deskripsi'
    ];
}