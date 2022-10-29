<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review_barang';

    protected $primaryKey = 'IDReview';

    protected $fillable = [
    	'IDBarang',
    	'ReviewBarang',
    	'tanggal_dan_waktu_Review'
    ];
}
