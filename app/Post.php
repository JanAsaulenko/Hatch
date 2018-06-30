<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'comments', 'lat', 'lng', 'title','img','category_id'];

    public static function table()
    {
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }




}
