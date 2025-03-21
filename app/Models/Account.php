<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'email', 'phone_number', 'address', 'admin','offers_id'];

    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function offers(): BelongsTo
    {
        return $this->belongsTo(Offer::class, 'offers_id');
    }

    public function isAdmin()
    {
        return $this->admin == 1;
    }
}
