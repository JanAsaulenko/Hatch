<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $table = 'districts';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
