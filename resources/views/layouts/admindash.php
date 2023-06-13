<?php

use Ti\Smartfarming\SessionManager;


 $session = new SessionManager();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo url("assets/css/vendors/simplebar/css/simplebar.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/vendors/simplebar.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/style.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/style.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url('assets/css/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/datatables.min.css'); ?>"  type="text/css">
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
<body>
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="<?php route('/dashboard'); ?>">
        Dashboard </a></li>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/users'); ?>"> User Management</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/deseases'); ?>">Deseases History</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/posts'); ?>">Posts</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/locations'); ?>"> Locations</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/roles'); ?>"> Roles</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/profile'); ?>">My Profile</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php route('/changepassword/userid/'.$_SESSION['admin_id']); ?>">Change Password</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php route('/farmer/logout'); ?>"> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    
    <div class="body flex-grow-1 px-3">