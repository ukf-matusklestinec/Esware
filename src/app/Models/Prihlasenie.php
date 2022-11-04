<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prihlasenie extends Model
{
    use HasFactory;

    public function listing() {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function aktivity() {
        return $this->hasMany(Aktivity::class, 'prihlasenie_id');
    }
}
