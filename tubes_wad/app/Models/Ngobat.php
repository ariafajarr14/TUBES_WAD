<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngobat extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaObat',
            'jenisObat',
            'dosisObat',
            'hargaObat',
    ];
    
}
