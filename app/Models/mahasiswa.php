<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use Hasfactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'fullname',
        'NIM',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat'
    ];

}
