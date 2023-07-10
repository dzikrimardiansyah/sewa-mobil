<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailMobil extends Model
{
    // use HasFactory;
    // use SoftDeletes;

    public $table = 'detail_mobil';

    protected $dates = [
        'created_at',
        'updated_at',
        
    ];

    protected $fillable = [
        'merek_mobil',
        'model_mobil',
        'no_plat',
        'price_mobil',
        'photo',
        'created_at',
        'updated_at',
        
    ];
}
