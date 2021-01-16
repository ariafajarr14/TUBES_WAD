<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'obats';

    protected $fillable = [
        'id',
        'namaObat',
        'jenisObat',
        'dosisObat',
        'hargaObat'
    ];
}
