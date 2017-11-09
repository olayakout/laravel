<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public static function is_high_level(){

    	return static::where("is_high_level",true)->get();
    }
}
