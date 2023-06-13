<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class Post extends Telthemweb{
    protected $table='post';
    protected $fillable =[
        'title',
        'body',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function post()
    {
        return $this->hasMany(Post::class,'post_id','id');
    }
}