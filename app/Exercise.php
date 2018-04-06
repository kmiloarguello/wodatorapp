<?php
namespace App;
use App\Favorite;
use Auth;

use Illuminate\Database\Eloquent\Model;


class Exercise extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'user_id'
    ];
    public function users(){
    return $this->belongsTo('App\User');
    }
    
    public function category(){
    return $this->belongsTo('App\Category');
    }

  public function favorited()
{
    return (bool) Favorite::where('user_id', Auth::id())->where('exercise_id', $this->id) ->first();
}
    
}