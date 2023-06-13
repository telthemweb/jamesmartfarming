<?php

use Ti\Smartfarming\Routers;
use Ti\Smartfarming\App\Controllers\UserController;
use Ti\Smartfarming\App\Controllers\AdministratorController;
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
$router = new Routers();


$router->get('/farmer/login', UserController::class, 'index','');
$router->post('/farmer/authenticate', UserController::class, 'loginAdmin','');
$router->get('/dashboard', AdministratorController::class, 'index','');
$router->get('/changepassword/userid/{id}', AdministratorController::class, 'changepassword','');
$router->post('/changepassword/c/{id}', AdministratorController::class, 'changepasswordpost','');

$router->get('/farmer/profile', AdministratorController::class, 'getAdminProfile','');
$router->get('/farmer/users', AdministratorController::class, 'getusers','');
$router->get('/farmer/user/{id}', AdministratorController::class, 'getuserbyid','');
$router->get('/farmer/delete/{id}', AdministratorController::class, 'destroy','');
$router->post('/farmer/update/{id}', AdministratorController::class, 'updateuser','');
$router->get('/farmer/createform', AdministratorController::class, 'getformcreate','');
$router->post('/farmer/create', AdministratorController::class, 'store','');
//5609b88675ab4d749059340f39e5aa85

$router->get('/farmer/deseases', AdministratorController::class, 'getDeases','');
$router->get('/desease/delete/{id}', AdministratorController::class, 'destroydesease','');
$router->get('/farmer/locations', AdministratorController::class, 'getLocations','');
$router->get('/farmer/roles', AdministratorController::class, 'getRoles','');
$router->get('/farmer/getroleform', AdministratorController::class, 'getroleform','');
$router->get('/farmer/role/{id}', AdministratorController::class, 'getrolebyId','');
$router->post('/role/create', AdministratorController::class, 'createrole','');
$router->get('/farmer/posts', AdministratorController::class, 'getPosts','');
$router->get('/farmer/post/comment/{id}', AdministratorController::class, 'getPostcomments','');

$router->get('/desease/reports', AdministratorController::class, 'getHistoryreport','');




/*
|--------------------------------------------------------------------------
|                        ALL LOGOUTS            
|--------------------------------------------------------------------------
|
|
*/
$router->get('/farmer/logout', AdministratorController::class, 'logout','');



















































$router->run();
