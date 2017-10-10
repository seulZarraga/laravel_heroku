<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /*add the array of properties that can be fill massibly*/

    protected $fillable = ['nombre', 'phone', 'email', 'mensaje'];

}
