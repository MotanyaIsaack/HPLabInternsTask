<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = "courses";
    protected $fillable = ['course_name'];
    public $timestamps = false;

    
    protected $primaryKey = 'course_id';
}
