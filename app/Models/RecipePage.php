<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipePage extends Model
{
    use HasFactory;

    protected $table = 'recipe_pages';

    protected $fillable = [
        'ban_img',
        'ban_subttitle',
        'ban_title',
        'sec1_card1_title',
        'sec1_card1_img',
        'sec1_card1_desc',
        'sec1_card2_title',
        'sec1_card2_img',
        'sec1_card2_desc',
        'sec3_subtitle',
        'sec3_title',
        'sec3_desc',
    ];
}
