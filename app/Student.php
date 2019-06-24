<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function image()
    {
        return $this->belongsToMany('App\Image','student_image','id','image_id');
    }
}
