<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogTandon extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tandon',
        'nama_sensor',
        'distance',
    ];
}
