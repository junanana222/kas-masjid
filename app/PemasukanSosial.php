<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasukanSosial extends Model
{
    protected $table = 'pemasukan_sosial';

    protected $primaryKey = 'pemasukan_id';

    protected $fillable = [
        'donatur_id',
        'kategori',
        'uraian',
        'nominal',
        'tanggal',
        'deskripsi'
    ];

    public function donatur()
    {
        return $this->belongsTo(Donatur::class, 'donatur_id');
    }
}