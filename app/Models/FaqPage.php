<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqPage extends Model
{
    use HasFactory;

    protected $table = 'faqpage';

    protected $fillable = [
        'ban_img',
        'ban_subttitle',
        'ban_title',
        'sec1_title',
        'sec1_desc',
        'sec1_btn_txt',
        'sec2_title',
        'sec2_desc',
        'loc',
        'phone',
        'mail',
        'timing',
        'sec3_subtitle',
        'sec3_title',
        'sec3_btn_txt',
        'sec3_img'
    ];
}
