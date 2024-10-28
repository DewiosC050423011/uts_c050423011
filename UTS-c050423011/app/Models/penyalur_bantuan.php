<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penyalur_bantuan extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
    'id_bantuan',
    'tanggal_penyaluran',
    'jumlah_bantuan',
    'keterangan',
    ];
}
