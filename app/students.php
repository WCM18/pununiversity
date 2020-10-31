<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    //
    public function courses()
  {
    return $this->belongsTo(courses::class);
  }
  

  

  

  
}

