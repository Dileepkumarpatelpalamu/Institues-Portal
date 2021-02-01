<?php include("./connection/db.php"); 
          session_start();
          if(isset($_SESSION['uname']))
          {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome To Dhiraj Classes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-light">
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
  <a class="navbar-brand" href="#"><?php echo @$_SESSION['uname']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Profile<span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="../index.php" tabindex="-1">Back</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" tabindex="-1">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	</header>
  <?php
}
else{
  echo"<script>alert('Unauthrorised access please login to access file..!!!!!!!!');</script>";
  echo"<script>window.open('../index.php','_self');</script>";
}