<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'name',
        'ip'
    ];

    public function sites() {
        return $this->hasMany(Site::class);
    }

    public function databases() {
        return $this->hasMany(Database::class);
    }
}
