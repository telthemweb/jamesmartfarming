<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class User extends Telthemweb{
    protected $table='user';
    protected $fillable =[
        'username',
        'email',
        'password',
        'phone',
        'active'
    ];
    public function history()
    {
        return $this->hasMany(History::class,'id','user_id');
    }
    public function locations()
    {
        return $this->hasMany(Location::class,'id','user_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class,'id','user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'id','user_id');
    }
    
    public function roles(){
        return $this->belongsToMany(Role::class,'Role_user','user_id','role_id');
    }
}