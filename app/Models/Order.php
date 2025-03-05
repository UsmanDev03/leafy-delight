<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'country', 'state', 'city',
        'street_address', 'apartment', 'zip_code', 'phone', 'email', 'stripe_id','cart_items',
        'sub_total','tax','delivery_charges','grand_total','status'    ];
}
