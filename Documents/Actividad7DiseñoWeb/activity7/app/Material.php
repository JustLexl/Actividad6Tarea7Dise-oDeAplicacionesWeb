<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function courses() { 
        return $this->hasMany(Course::class); 
    }

    public function course() { 
        return $this->belongsTo(Course::class); 
    } 
}
