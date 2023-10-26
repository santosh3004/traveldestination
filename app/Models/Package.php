<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['destination', 'duration', 'price', 'description'];

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}
