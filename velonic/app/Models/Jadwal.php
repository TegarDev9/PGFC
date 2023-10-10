<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'grup',
        'id_grup',
        'id_jadwal',
        'id_tim',
        'id_tim2',
        'tanggal',
        'mulai',
        'selesai',
        'status',
        'skor',
    ];
}
