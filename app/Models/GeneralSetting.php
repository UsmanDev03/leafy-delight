<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $table = 'general_settings';

    protected $fillable = [
        'sec1_title',
        'sec1_phone',
        'sec1_email',
        'sec1_address',
        'sec1_timing',
        'sec2_social_link1',
        'sec2_social_link2',
        'sec2_social_link3',
        'sec2_social_link4',
        'sec2_social_link5',
        'sec3_logo',
        'sec3_logo2',
        'sec3_title',
    ];
}
