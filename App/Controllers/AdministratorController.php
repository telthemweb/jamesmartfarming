<?php
/*
|--------------------------------------------------------------------------
|            This file is part of the Telthemweb package.
|               
|--------------------------------------------------------------------------
|
|     For the full copyright and license information, please view the LICENSE
|       file that was distributed with this source code.
|
*/

namespace Ti\Smartfarming\App\Controllers;

use Ti\Smartfarming\App\Models\Comment;
use Ti\Smartfarming\App\Models\History;
use Ti\Smartfarming\App\Models\Location;
use Ti\Smartfarming\App\Models\Post;
use Ti\Smartfarming\App\Models\Role;
use Ti\Smartfarming\Middlewares\AdministratorMiddleware;
use Ti\Smartfarming\App\Models\User;
use Ti\Smartfarming\Configuration;
use Ti\Smartfarming\Request;
use Ti\Smartfarming\SessionManager;
use Ti\Smartfarming\View;

class AdministratorController extends Controller
{
    public function __construct()
    {
        (new AdministratorMiddleware())->redirectIfNotAuthenticated();
    }
    public function index()
    {
        $usercount =User::count();
        $deseasecount =History::count();
        $locationcount =Location::count();
        $this->view("administrator/Dashboard", "admindash", 'adminfooter', [
            'usercount' => $usercount,
            'deseasecount' => $deseasecount,
            'locationcount' => $locationcount,
        ]);
    }

    public function logout()
    {


        unset($_SESSION['admin_id']);
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
        unset($_SESSION['username']);
        unset($_SESSION['gender']);
        unset($_SESSION['country']);
        unset($_SESSION['province']);
        unset($_SESSION['city']);
        unset($_SESSION['city']);
        unset($_SESSION['address']);

        session_destroy();
        Configuration::redirection('farmer/login');
    }


    public function changepassword($id)
    {
        $admin = User::find($id);
        $this->view("administrator/changepassword", "admindash", 'adminfooter', ['administrators' => $admin,]);
    }
    public function changepasswordpost()
    {
        $admin_id = $_SESSION['admin_id'];


        $request = new Request;
        $session = new SessionManager();
        $admin = User::find($admin_id);
        $newpassword = $request->input('newpassword');
        $cnewpassword = $request->input('cnewpassword');


        $newdata = array();
        $newdata['new password'] = $newpassword;
        $options = [
            'cost' => 12,
        ];
        $encrypetedpassd = password_hash($newpassword, PASSWORD_BCRYPT, $options);

        if ($newpassword != $cnewpassword) {
            $session->setFlash('error', 'Password do not match');
        } else {
            $options = [
                'cost' => 12,
            ];
            $encrypetedpass = password_hash($newpassword, PASSWORD_BCRYPT, $options);
            $admin->password = $encrypetedpass;
            $admin->update([$admin]);
            $session->setFlash('success', 'Password  changed successfully please login with new password');
            Configuration::redirection('admin/logout');
        }
    }
    public function getAdminProfile()
    {
        $admin_id = $_SESSION['admin_id'];
        $administrator = User::find($admin_id);
        return $this->view("administrator/profile", "admindash", 'adminfooter', [
            'admin' => $administrator,
        ]);
    }
    public function getusers()
    {
        $administrators = User::orderByDesc('created_at')->get();
        $this->view("administrator/Users/index", "admindash", 'adminfooter', [
            'administrators' => $administrators,
        ]);
    }
    public function getuserbyid($id)
    {
        $administrator = User::find($id);
        $this->view("administrator/Users/edit", "admindash", 'adminfooter', [
            'administrator' => $administrator,
        ]);
    }

    public function updateuser($id)
    {
        $request = new Request;
        $admin = User::find($id);
        $session = new SessionManager();



        $options = [
            'cost' => 12,
        ];
        $encrypetedpass = $request->input('password') == null ? $admin->password : password_hash($request->input('password'), PASSWORD_BCRYPT, $options);
        $admin->username = $request->input('username');
        $admin->password = $encrypetedpass;
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->update([$admin]);
        $session->setFlash('success', 'User updated successfully!!');
        Configuration::redirection('farmer/users');
    }

    public function getformcreate()
    {
        $this->view("administrator/Users/create", "admindash", 'adminfooter', []);
    }

    public function store()
    {
        $request = new Request;
        $admin = new User;
        $session = new SessionManager();



        $options = [
            'cost' => 12,
        ];
        $encrypetedpass = password_hash($request->input('password'), PASSWORD_BCRYPT, $options);
        $admin->username = $request->input('username');
        $admin->password = $encrypetedpass;
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->active = 1;
        $admin->fs_uniquifier = md5(rand(0000, 999));
        $admin->save();
        $session->setFlash('success', 'User created successfully!!');
        Configuration::redirection('farmer/users'); //b4cc344d25a2efe540adbf2678e2304c
    }

    public function destroy($id)
    {
        $admin = User::find($id);
        $session = new SessionManager();
        if (count($admin->roles) > 0) {
            $session->setFlash('error', 'User cant be deleted');
            Configuration::redirection('farmer/users');
        } else {
            $admin->delete();
            $session->setFlash('success', 'User  deleted successfully');
            Configuration::redirection('farmer/users');
        }
    }



    //Desease
    public function getDeases()
    {
        $deseases = History::orderByDesc('created_at')->get();
        $this->view("administrator/deseases/index", "admindash", 'adminfooter', [
            'deseases' => $deseases,
        ]);
    }

    public function destroydesease($id)
    {
        $deseas = History::find($id);
        $session = new SessionManager();
        $deseas->delete();
        $session->setFlash('success', 'Desease  deleted successfully');
        Configuration::redirection('farmer/deseases');
    }

    public function getHistoryreport()
    {
        $deseases = History::orderBy('created_at', 'asc')->get();
        echo json_encode($deseases);
    }

    public function getLocations()
    {
        $locations = Location::orderByDesc('created_at')->get();
        $this->view("administrator/locations/index", "admindash", 'adminfooter', [
            'locations' => $locations,
        ]);
    }
    public function getRoles()
    {
        $roles = Role::orderByDesc('created_at')->get();
        $this->view("administrator/Roles/index", "admindash", 'adminfooter', [
            'roles' => $roles,
        ]);
    }

    // getroleform

    public function getroleform()
    {
        $this->view("administrator/Roles/create", "admindash", 'adminfooter', []);
    }

    //createrole

    public function createrole()
    {
        $request = new Request;
        $role = new Role;
        $session = new SessionManager();
        $role->name = $request->input('name');
        $role->description = $request->input('description');
        $role->save();
        $session->setFlash('success', 'Role created successfully!!');
        Configuration::redirection('farmer/roles');
    }

    public function getrolebyId($id)
    {
        $role = Role::find($id);
        $this->view("administrator/Roles/edit", "admindash", 'adminfooter', ['role' => $role,]);
    }

    public function getPosts()
    {
        $posts = Post::orderByDesc('created_at')->get();
        $this->view("administrator/posts/index", "admindash", 'adminfooter', [
            'posts' => $posts,
        ]);
    }

    public function getPostcomments($id)
    {
        $post = Post::find($id);
        $comments = Comment::where('post_id', $post->id)->orderByDesc('created_at')->get();
        $this->view("administrator/posts/comment", "admindash", 'adminfooter', [
            'comments' => $comments,
            'post' => $post
        ]);
    }
    // 
}
