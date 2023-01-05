<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tandon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status',
        'deskripsi',
    ];
}
