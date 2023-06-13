<?php

namespace Ti\Smartfarming\App\Controllers;

use Ti\Smartfarming\Request;
use Ti\Smartfarming\Configuration;
use Ti\Smartfarming\SessionManager;
use Ti\Smartfarming\App\Models\User;
use Ti\Smartfarming\Middlewares\AuthAdminMiddleware;



class UserController extends Controller{

    public function index() {
		
        $this->view("administrator/login", "admin", 'footer', []);
	}

    public function home()
    {
        return $this->view("User/Dashboard", "admin", 'footer', []);
    }
    public function loginAdmin(){
       
       $request = new Request;
       $session = new SessionManager();
       $username = $request->input('username');
       $password = $request->input('password');
      
           $admin = User::whereusername($username)->first();
           if($admin != NULL){
                   $veryfypass = password_verify($password, $admin->password);
                   if($veryfypass==true){
                       $_SESSION['admin_id'] = $admin->id;
                       $_SESSION['name'] = $admin->username;
                       $_SESSION['email'] = $admin->email;
                       $_SESSION['phone'] = $admin->phone;
                       $_SESSION['username'] = $admin->username;
                       Configuration::redirection('dashboard');
                       $session->setFlash('success', 'Welcome '.$admin->username);
                       
                   }else{
                       
                       Configuration::redirection('farmer/login');
                      $session->setFlash('error', 'Incorrect password please try again !!');
                       exit();
                   }
               
               
       
           }else{	
            Configuration::redirection('farmer/login');
               $session->setFlash('error', 'Incorrect credentials please contact User for account Activation !!');
               exit();
           }
    }
    


         
}