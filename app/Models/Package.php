<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['destination', 'duration', 'price', 'description','persons'];

    public function destinations()
    {
        return $this->hasOne(Destination::class,'id','destination_id');
    }
}
