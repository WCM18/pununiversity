<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grades extends Model
{

 function students(){
    return $this->belongsToMany(students::class);

 }    //
 public function courses(){
    return $this->hasMany(courses::class);
}
}
