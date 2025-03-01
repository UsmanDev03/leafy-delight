<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growpage extends Model
{
    use HasFactory;

    protected $table = 'growpage';

    protected $fillable = [
        'banner_title',
        'banner_subtitle',
        'ban_img',
        'sec1_title',
        'sec1_desc',
        'sec1_img',
        'sec2_subtitle',
        'sec2_title',
        'sec2_desc',
        'sec2_card_desc',
    ];
}
