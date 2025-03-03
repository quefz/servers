<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name',
        'url',
        'owner_id',
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }
}
