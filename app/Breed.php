<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = ['name', 'classification', 'life_expectancy'];
    
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
