<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'ban_img', 
        'ban_subtitle',
        'ban_title',
        'sec1_desc', 
        'sec1_link_text', 
        'sec1_counter1_title', 
        'sec1_counter1_count',
        'sec1_counter2_title', 
        'sec1_counter2_count',
        'sec2_img', 
        'sec2_video_url', 
        'sec2_title', 
        'sec2_desc',
        'sec2_progress_title1',
        'sec2_progress_num', 
        'sec2_progress_title2', 
        'sec2_progress_num2',
        'sec2_card1title', 
        'sec2_card1desc', 
        'sec2_card2title', 
        'sec2_card2desc',
        'sec2_card3title', 
        'sec2_card3desc', 
        'sec2_card4title', 
        'sec2_card4desc',
        'sec3_title', 
        'sec3_desc', 
        'sec3_img', 
        'sec3_icon1_title', 
        'sec3_icon2_title',
        'sec3_icon3_title', 
        'sec3_icon4_title', 
        'sec3_icon5_title', 
        'sec3_btn_txt',
        'sec4_img', 
        'sec4_title', 
        'sec4_desc', 
        'sec4_subtitle', 
        'sec4_btn_txt', 
        'sec4_exp_num'
    ];
}
