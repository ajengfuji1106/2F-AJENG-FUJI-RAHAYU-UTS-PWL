<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'daftar_barang';

    protected $primaryKey = 'IDbarang';

    protected $fillable = [
    	'NamaBarang',
    	'HargaBarang'
    ];
}
