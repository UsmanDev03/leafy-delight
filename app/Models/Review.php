<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    use HasFactory;

    protected $fillable = [
        'sec1_subtitle',
        'sec1_title',
        'sec1_img',
        'sec2_subtitle',
        'sec2_title',
        'sec2_desc',
        'sec2_btn_txt',
        'sec2_img',
        'sec2_happy_cus',
        'sec3_title',
        'sec3_desc',
    ];
}
