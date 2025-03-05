<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sec1_title',
        'sec1_desc',
        'sec2_available_stock',
        'sec2_tags',
        'sec3_img1',
        'sec3_imgs',
        'sec4_weight_price',
        'sec5_tray_price',
        'discount_price',
        'slug',
    ];
}
