<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddReview extends Model
{
    use HasFactory;

    protected $table = 'add_reviews';

    protected $fillable = [
        'sec1_title',
        'sec1_subtitle',
        'sec1_img',
        'sec2_title',
        'sec2_desc',
    ];
}
