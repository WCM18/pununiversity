<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_grade extends Model
{public function students(){
    return $this->BelongsToMany(grades::class);
}
public function grades(){
    return $this->belongsTo(courses::class);
}
}
