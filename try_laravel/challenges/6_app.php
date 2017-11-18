<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model 
{
    public function scopeFarmington($query) 
    {
        return $query->where('city', 'Farmington');
    }
}