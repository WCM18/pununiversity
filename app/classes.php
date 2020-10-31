<?php

namespace App;
use App\Notifiable;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    //  
   
    function courses(){
        return $this->hasMany(courses::class);
}
}