<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'reason',
        'massage', // Ensure this is the correct field name (Did you mean 'message'?)
    ];
}
