<?php 
  require_once 'assets/php/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Achilles Drenos">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?> | SmartFarm</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#open-nav").click(function(){
        $(".admin-nav").toggleClass('animate');
      });
    });

  </script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap');
    *{
      font-family: 'Maven Pro', sans-serif;
    }
    .admin-nav{
      width: 220px;
      min-height: 100vh;
      overflow: hidden;
      background-color: #343a40;
      transition: 0.3s all ease-in-out;
    }
    .admin-link{
      background-color: #343a40;
    }
    .admin-link:hover, .nav-active{
      background-color: #212529;
      text-decoration: none;
    }
    .animate{
      width: 0;
      transition: 0.3s all ease-in-out;
    }
  </style> 

</head>
<body>
  <div class="container-fluid">
    <div class="row ">
      <div class="admin-nav p-0">
        <h4 class="text-light text-center p-2">SmartFarm</h4>
        <div class="list-group list-group-flush">
          <a href="home.php" class="list-group-item text-light admin-link  <?=(basename($_SERVER['PHP_SELF']) == "home.php")?"active":""; ?>"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
          <a href="notes.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == "notes.php")?"active":""; ?> "><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Notes</a>
          <a href="notification.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == "notification.php")?"active":""; ?> "><i class="fas fa-bell"></i>&nbsp;&nbsp;Notification</a>
          <a href="information.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == "information.php")?"active":""; ?> "><i class="fas fa-info"></i>&nbsp;&nbsp;Information</a>
          <a href="charts.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == "charts.php")?"active":""; ?> "><i class="fas fa-chart-line"></i>&nbsp;&nbsp;Charts</a>
        </div>
      </div>

      <div class="col">
        <div class="row">
          <div class="col-lg-12 bg-primary pt-2 justify-content-between d-flex">
            <a href="#" class="text-white" id="open-nav"><h3><i class="fas fa-bars"></i></h3></a>           
            <h4 class="text-light"><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?></h4>
      
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                  <i class="fas fa-user-cog"> </i> &nbsp; Hi <?= $fname; ?>
                </a>
              <div class="dropdown-menu">
                <a href="profile.php" class="dropdown-item <?=(basename($_SERVER['PHP_SELF']) == "profile.php")?"active":""; ?>"><i class="fas fa-cog"></i>&nbsp; Profile </a>
                <a href="assets/php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>
              </div>
          </div>
        </div>
        



