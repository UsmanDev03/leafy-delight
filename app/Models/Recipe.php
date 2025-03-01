<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'sec1_title',
        'sec1_date',
        'sec1_img',
        'sec2_card_desc',
        'sec2_card_name',
        'sec3_title',
        'sec3_desc',
        'slug',
    ];
}
