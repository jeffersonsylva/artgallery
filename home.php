<!doctype html>
<!--Original code: Victor Adad Sangabriel, Lunes 8 de Junio de 2015-->
<!--Reutilized code: University of Lethbridge, CPSC3660, March 14th 2016-->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Art Gallery 12</title>
</head>

<body>
	<div class="brand"><a href="home.php">Alfheim Art Gallery</a></div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Art Gallery 12: pznrzh</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="artist.php">Artist</a></li>
					<li><a href="exhibition.php">Exhibition</a></li>
					<li><a href="artwork.php">Artwork</a></li>
					<li><a href="credits.php">Credits</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
<div class="container">
	<div class="row"> <!-- Here starts the picture's slide -->
		<div class="box">
			<div class="col-lg-12 text-center">
				<div id="carousel-example-generic" class="carousel slide">
					<ol class="carousel-indicators hidden-xs">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>	
					<div class="carousel-inner">
						
						<div class="item active">
							<img class="img-responsive img-full" src="images/muestra1.jpg" alt="">
						</div>
                        
						<div class="item">
							<img class="img-responsive img-full" src="images/muestra2.png" alt="">
						</div>

						<div class="item">
							<img class="img-responsive img-full" src="images/muestra3.jpg" alt="">
						</div>

						<div class="item">
							<img class="img-responsive img-full" src="images/muestra4.png" alt="">
						</div>
					
					</div>
				<!--Controles para las slides-->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="icon-prev"></span></a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="icon-next"></span></a>
				</div>
				<!-- <h2>
				<small>Please introduce your
					<strong>MySQL username and password.</strong>
				</small>
				</h2> -->
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div class="col-lg-12 text-center">
				<p>Art Gallery 12 Web Page licensed under a <a href="https://www.creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonComercial-ShareAlike 3.0 Unported License</a>.
                    
				<a href="http://www.w3.org/html/logo/">
					<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-device-graphics-multimedia-performance.png" width="261" height="64" alt="HTML5 Powered with CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, and Performance &amp; Integration" title="HTML5 Powered with CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, and Performance &amp; Integration">
					</p>
				</a>
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script> <!--JavaScript for GUI and animations-->
	<script>
		$('.carousel').carousel({
			interval: 5000 
		})
	</script>
</body>
</html>