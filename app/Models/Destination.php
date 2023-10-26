<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;
    protected $fillable=['name','cities','img'];

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

}
