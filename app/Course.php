<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','credit-hour', 'department_id','semester_id', 
    ];
}
