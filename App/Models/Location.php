<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class Location extends Telthemweb{
    protected $table='location';
    protected $fillable =[
        'street',
        'city',
        'country',
        'user_id',
        'city',
        'country',
        'street',
        'city',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}