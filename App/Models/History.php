<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class History extends Telthemweb{
    protected $table='history';
    protected $fillable =[
        'disease',
        'user_id',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}