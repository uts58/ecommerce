<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = "logins";
    protected $fillable = ['id','userName','password','access'];
}
