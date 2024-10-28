<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jenis_bantuan extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
    'nama_jenis_bantuan',
    'keterangan',

    ];
}
