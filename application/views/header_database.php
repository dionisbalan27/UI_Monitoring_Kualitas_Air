
<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<?php
//This line will make the page auto-refresh each 15 seconds
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <!--//I've used bootstrap for the tables, so I inport the CSS files for taht as well...-->
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" />
  <link href="<?= base_url('/assets/css/now-ui-dashboard.css?v=1.5.0');?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('/assets/demo/demo.css');?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
           <a href="<?= site_url('c_monitoring');?>">
              <i class="now-ui-icons tech_tv"></i>
              <p>Monitoring</p>
            </a>
          </li>
          <li class="active ">
            <a href="<?= site_url('c_database');?>">
              <i class="fa fa-database icon"></i>
              <p>Database</p>
            </a>
          </li>
          </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
    <?php  //inisialisasi variabel 
    $oksigen= new ArrayObject(array());//node1
    $suhu=new ArrayObject(array());
    $ph=new ArrayObject(array());
     ?>