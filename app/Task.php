<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Catching Feelers
    public static function incomplete()
    {
        return static::where('complete', 0)->get();
    }

    public static function complete()
    {
        return static::where('complete', 1)->get();
    }
}
