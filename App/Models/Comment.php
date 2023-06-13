<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class Comment extends Telthemweb{
    protected $table='comment';
    protected $fillable =[
        'comment',
        'user_id',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'id','post_id');
    }
}