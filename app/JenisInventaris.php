<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisInventaris extends Model
{
    protected $table = 'jenis_inventaris';

    protected $fillable = ['kode', 'nama', 'keterangan'];

    public $timestamps = false;
}
