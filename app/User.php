<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use App\User;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'name', 'email', 'password'];
//    protected $guarded = ['id','email_verified_at','remember_token','created_at','updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
         $this->attributes['password'] = bcrypt($value);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function userHasRole($role_name){
        foreach($this->roles as $role){
            if($role_name == $role->name)
                return true;
        }
        return false;
    }
}
