<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class Role extends Telthemweb{
    
    protected $table='role';
    protected $fillable =[
        'name',
        'description'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

}