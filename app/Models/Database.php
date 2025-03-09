<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $fillable = [
        'name',
        'server_id'
    ];

    public function server() {
        return $this->belongsTo(Server::class);
    }
}
