<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'fname', 'lname', 'studId', 'overAllPoints', 'pointsBal', 'pointsUsed', 'bDay', 'userId'
    ];
}
