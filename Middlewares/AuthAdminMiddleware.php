<?php
namespace Ti\Smartfarming\Middleware;

use Ti\Smartfarming\Configuration;
use Ti\Smartfarming\SessionManager;



class AuthAdminMiddleware{
    public function __construct(){
        $this->AuthenticatedUserIdData();
    }


    public function AuthenticatedUserIdData()
    {
        
        if(isset($_SESSION['admin_id']))
        { 
            $session = new SessionManager;
             $session->setFlash('error', 'You are not authorized to this Page. Please Login first!!');
             Configuration::redirection('dashboard');
        }
    }
}