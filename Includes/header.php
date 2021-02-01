<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome To Dhiraj Classes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php include("./connection/db.php"); ?>

</head>
<body class="bg-dark">
	<style>
		.carousel-inner img{
			height: 568px;
		}
    html{
      scroll-behavior: smooth;
    }
	</style>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="slider/logo.png " style="height: 100px; width: 200px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Course
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#HTML">Html</a>
          <a class="dropdown-item" href="#Dhtml">Dhtml</a>
          <a class="dropdown-item" href="#J-Query">J-Query</a>
        </div>
      </li>
      <?php
       
              if(isset($_SESSION['uname']))
              {
                echo"<li class='nav-item'><a class='nav-link disabled'  tabindex='-1' aria-disabled='true'>".$_SESSION['uname']."</a></li>";
                echo"<li class='nav-item'><a class='nav-link'  tabindex='-1' href='Admin/logout.php' aria-disabled='true'>Logout</a></li>";
              }
              else
              {
                echo "<li class='nav-item'><a class='nav-link' href='#Login' tabindex='-1' aria-disabled='true'>Login</a></li>";
              }
        
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</header>