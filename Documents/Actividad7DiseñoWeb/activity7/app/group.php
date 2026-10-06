<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function users() { 
        return $this->hasMany(User::class); 
    } 

    public function courses() { 
        return $this->hasMany(Course::class); 
    } 
}
