<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'title',
        'coursecover',
        'content',
        'material_id',
    ];

    public function group() { 
        return $this->belongsToMany(Group::class); 
    } 

    public function material() { 
        return $this->belongsTo(Material::class); 
    } 
}
