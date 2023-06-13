<?php
namespace Ti\Smartfarming\App\Models;

use Ti\Smartfarming\Telthemweb;

class Role_user extends Telthemweb{
    protected $table='role_user';
    protected $fillable =[
        'user_id',
        'role_id'
    ];

    public function role()
    {
        return $this->hasOne(Role::class,'id','role_id');
    }
}