<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    //
    public function classes(){
    return $this->belongsTo(classes::class);
}
public function students(){
    return $this->hasMany(students::class);
}
}
