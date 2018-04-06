<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    
    
    public function categories(){
        return $this->hasMany('App\Category');
    }
    
   
    
    public function exercises()
    {
        return $this->belongsTo('App\Exercise');
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Exercise::class, 'favorites', 'user_id', 'exercise_id');
    }
}