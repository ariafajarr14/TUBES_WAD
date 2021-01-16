<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obat extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = 'obats';

    protected $fillable = [
        'id',
        'namaObat',
        'jenisObat',
        'dosisObat',
        'hargaObat'
    ];
}
