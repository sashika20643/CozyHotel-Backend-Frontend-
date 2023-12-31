<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'capacity', 'price'];
    public function issuances()
    {
        return $this->hasMany(room::class);
    }

}
