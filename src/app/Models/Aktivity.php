<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivity extends Model
{
    use HasFactory;

    public function prihlasenie() {
        return $this->belongsTo(Prihlasenie::class, 'prihlasenie_id');
    }
}
