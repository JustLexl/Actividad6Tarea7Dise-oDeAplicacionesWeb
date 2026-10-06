<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function group() { 
        return $this->belongsToMany(Group::class); 
    } 

    public function material() { 
        return $this->belongsTo(Material::class); 
    } 
}

