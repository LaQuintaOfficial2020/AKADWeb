<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = [
        'fname', 'lname', 'empId', 'bDay', 'userId'
    ];
}
