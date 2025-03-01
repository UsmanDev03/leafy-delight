<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestiPage extends Model
{
    use HasFactory;

    protected $table = 'testipage';
    
    protected $fillable = [
        'ban_img',
        'ban_subtitle',
        'ban_title',
        'sec1_subtitle',
        'sec1_title',
        'sec1_img',
        'sec1_desc',
        'sec1_btn_txt',
        'sec2_title',
        'sec2_desc',
    ];
}
