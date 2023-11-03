<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'roomtype_id'];

    public function issuances()
    {
        return $this->hasMany(reservation::class);
    }

}
