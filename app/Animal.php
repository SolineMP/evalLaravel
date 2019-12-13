<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'sex', 'age', 'weight', 'height,', 'breed_id'];
    
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}
