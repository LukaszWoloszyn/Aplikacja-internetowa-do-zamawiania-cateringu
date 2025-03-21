<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'offer_id', 'start_date', 'end_date', 'total_price', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(Account::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}

