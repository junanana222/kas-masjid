<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donatur';

    protected $primaryKey = 'donatur_id';

    protected $fillable = [
        'nama',
        'no_telp',
        'alamat'
    ];
}
