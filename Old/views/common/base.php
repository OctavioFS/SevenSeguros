<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo ?> </title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="nav-header">
				<a href="" class="navbar-brand">Seven</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="">CUARTEL GENERAL</a></li>
				<li><a href="">LA LIGA</a></li>
				<li><a href="">ÚNETE A LA LIGA</a></li>				
				<li><a href="contacto">SÚPER PODERES</a></li>
				<li><a href="contacto">COTIZADOR</a></li>
				<li><a href="contacto">CONTACTO</a></li>

			</ul>
			<ul class="nav navbar-nav navbar-right">				
				<li><a href="/llamas"><img src="assets/img/fb.png" alt=""></a></li>
			</ul>
		</div>		
	</nav>
	<?php echo $body_content ?> 
	<footer>
		<figure>
			<img class="futer" src="assets/img/footer.jpg" alt="">
		</figure>
	</footer>	
	<script src="<?php echo Flight::get('path.assets') ?>/js/jquery.js"></script>
	<?php echo (isset($script_content)) ? $script_content : ""; ?>
	<!-- Latest compiled and minified CSS -->
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
</body>
</html>