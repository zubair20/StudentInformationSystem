<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'marks', 'student_id', 'semester_id', 'course_id','marks_type_id',
    ];
}
