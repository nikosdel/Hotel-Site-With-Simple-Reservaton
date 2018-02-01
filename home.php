<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/menu_toggle.js"></script>
	<title>Hotel Natassa</title>
</head>
<body>

	<i class="fa fa-bars toggle_menu"></i>

	<div class="sidebar_menu">
		<i class="fa fa-times"></i>
		<center>
			<a href="home.php"><h1 class="boxed_item"><img src="logo3.png"></h1>
			
		</center>

		<ul class="navigation_section nav_item_smaller" align="center">
			<li class="navigation_item" >
				<a href="home.php">ΑΡΧΙΚΗ</a>
			</li>
			<li class="navigation_item">
				<a href="diamoni.html">ΔΙΑΜΟΝΗ
			</li>
			<li class="navigation_item" >
				<a href="gallery.html">GALLERY
			</li>
			<li class="navigation_item">
			<a href="reservation.html">
				ΚΡΑΤΗΣΕΙΣ
			</a>
			</li>
			<li class="navigation_item" >
				<a href="location.html">ΤΟΠΟΘΕΣΙΑ</a>
			</li>
			<li class="navigation_item" >
			<a href="contact.html">	ΕΠΙΚΟΙΝΩΝΙΑ</a>
			</li>
		</ul>

		<center>
			<a href="login.php"><h1 class="boxed_item boxed_item_smaller signup">
			<i class="fa fa-user"></i>
				Login
			</h1></a>
		</center>

		<center>
			<h1 class="boxed_item copyright">
			
				Copyright 2018@TEICM
			</h1>
		</center>
	</div><!-- End of sidebar -->
	<div class="main">
	<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="haniotivn3.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="haniotivn2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="test1.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

	<script src="js/close_menu.js"></script>

</body>
</html>