<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'forms';

    protected $fillable = [
        'id',
        'namaClient',
        'keluhan',
        'lama',
        'riwayat',
    ];
}
