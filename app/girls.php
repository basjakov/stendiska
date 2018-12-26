<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class girls extends Model
{
     protected $fillable = [
        'name','lastname','age','height','weight','university','specification','workingtime','file'
    ];
}
