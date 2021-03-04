<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    protected $table = 'pelapor';

    protected $fillable = [
        'nik','nama_lengkap','alamat','tanggal_lahir','agama','status_kawin','created_at','updated_at'
    ];
}
