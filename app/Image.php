<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function student()
    {
        return $this->belongsToMany('App\Student','student_image','id','student_id');
    }
}
