<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'time', 'servings', 'ingredients', 'instructions', 'image', 'offers_id'];

    public $timestamps = false;

    public function offers(): BelongsTo
    {
        return $this->belongsTo(Offer::class, 'offers_id');
    }
}
