<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    //
public $directory="/images/";

    use SoftDeletes;

    protected $fillable = [

     'title', 'content','path'

    ];

    protected $dates =['deleted_at'];



    public function user(){

        return $this->belongsTo('App\User');
    }

    public function photos(){

        return $this->morphMany('App\Photo','imageable');
    }


    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }


    public static function scopeLatest($query){

     return $query->orderBy('id','desc')->get();
    }

    public  function getPathAttribute($value){

        return $this->directory + $value;

    }

}
