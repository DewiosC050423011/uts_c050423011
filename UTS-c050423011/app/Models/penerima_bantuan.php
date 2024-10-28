<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penerima_bantuan extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'jenis_kelamin',
        'pekerjaan',
    ];
}
