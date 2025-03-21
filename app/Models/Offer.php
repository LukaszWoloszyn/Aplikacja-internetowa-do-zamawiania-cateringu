<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'breakfast', 'lunch', 'dinner', 'tea', 'supper', 'image', 'price_week', 'price_month', 'delivery'];

    public $timestamps = false;

}
