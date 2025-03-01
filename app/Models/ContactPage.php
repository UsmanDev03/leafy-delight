<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $table = 'contactpage';

    protected $fillable = [
        'banner_title', 'banner_subtitle', 'ban_img',
        'sec1_img', 'card_addr', 'card_phone', 'card_email', 'card_workinghours',
        'card2_subtitle', 'card2_title', 'card2_desc'
    ];
}
