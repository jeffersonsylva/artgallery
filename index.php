<!doctype html>
<!--Index file, also known as Login page-->
<!--Original code: Victor Adad Sangabriel, Lunes 8 de Junio de 2015-->
<!--Reutilized code: University of Lethbridge, CPSC3660, March 14th 2016-->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Art Gallery 12: Login</title>
</head>

<body>
	<div class="brand">Alfheim Art Gallery</div>
	<div class="container">
		
		<!-- Material Design Login by Envato Tuts+ -->
		<div class="form-box">
		    <div class="head">Welcome</div>       
		    <form action="setpass.php" method=post>
		        
		        <div class="form-group">
		          <label class="label-control">
		            <span class="label-text">MySQL Username</span>
		          </label>
		          <input input type=text name="username" class="form-control" />
		        </div>
		        
		        <div class="form-group">
		          <label class="label-control">
		            <span class="label-text">Password</span>
		          </label>
		          <input type=password name="password" class="form-control" />
		        </div>
		        
		        <input type=submit value="Login" class="btn" />
		        <p class="text-p">Don't have an account? <a href="https://www.uleth.ca/bridge/twgkwbis.P_WWWLogin">Sign up</a> </p>
		    </form>
		</div>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</div>
	<br>
	<br>
	<footer>
		<div class="container">
			<div class="col-lg-12 text-center">
				<p>Art Gallery 12 Web Page licensed under a <a href="creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonComercial-ShareAlike 3.0 Unported License</a>. pznrzh.
                    
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