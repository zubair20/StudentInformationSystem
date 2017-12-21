<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarksType extends Model
{
	protected $table = 'markstypes';
	
    protected $fillable = [
        'name',
    ];
}
