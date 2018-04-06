<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $fillable = 
    [
    	'name',
    	'description',
    	'user_id',


    ];


      public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }
}
