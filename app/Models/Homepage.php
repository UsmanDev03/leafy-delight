<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $fillable = [
        'sec1_card1_img', 'sec1_card1_title', 'sec1_card1_desc',
        'sec1_card2_img', 'sec1_card2_title', 'sec1_card2_desc',
        'sec1_card3_img', 'sec1_card3_title', 'sec1_card3_desc',
        'sec2_subttitle', 'sec2_title', 'sec2_desc', 'sec2_img', 'sec2_btn_txt',
        'sec2_card1_subtitle', 'sec2_card1_title', 'sec2_card1_desc',
        'sec2_card2_title', 'sec2_card2_title2',
        'sec3_subttitle', 'sec3_title', 'sec3_desc', 'sec3_img', 'sec3_btn_txt',
        'sec3_card1_title', 'sec3_card1_desc', 'sec3_card2_title', 'sec3_card2_desc',
        'sec3_card3_title', 'sec3_card3_desc',
        'sec4_subttitle', 'sec4_title', 'sec4_desc', 'sec4_img', 'sec4_btn_txt',
        'sec5_subttitle', 'sec5_title', 'sec5_desc', 'sec5_img', 'sec5_img2', 'sec5_btn_txt',
        'counter1_num', 'counter1_text', 'counter2_num', 'counter2_text',
        'counter3_num', 'counter3_text', 'counter4_num', 'counter4_text',
        'sec6_title', 'sec6_img',
        'faq_subttitle', 'faq_title', 'faq_desc', 'faq_img', 'faq_btn_txt',
        'delivery_subttitle', 'delivery_title', 'delivery_img', 'delivery_desc'
    ];
}