<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahdatauser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'referral_code',
        'password',
    ];
}
