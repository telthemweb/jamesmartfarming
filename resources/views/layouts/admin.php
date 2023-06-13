<?php

use Ti\Smartfarming\SessionManager;


 $session = new SessionManager();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php section('Admin Login'); ?></title>
    <meta name="csrf-token" content="<?php CSRFToken(); ?>">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo url('assets/img/logo.png'); ?>"/>
    <link rel="stylesheet" href="<?php echo url("assets/css/vendors/simplebar/css/simplebar.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/vendors/simplebar.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/style.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url("assets/css/style.css"); ?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url('assets/css/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/all.min.css'); ?>">
</head>
<body>
