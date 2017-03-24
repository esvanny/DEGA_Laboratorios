<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>DEGA Laboratorios</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link type="text/css" href="css/style.css" rel="stylesheet">

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <script src="js/main.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

<?php require ('templates/header.php'); ?>

	<main class="container center-align">
		<section>
			<div class="row center-align" id="logo-principal">
				<div class="col s12 m12 l6">
				<img src="images/dega-logo.svg" alt="DEGA Laboratorios" >
				</div>
				<div class="col s12 m12 l6">
						<h3 class="valign">¿Te interesan nuestros servicios?</h3>
						<a class="waves-effect waves-light btn" href="#Solicitud"><i class="material-icons left">comment</i>¡Solicítalos!</a>
				</div>
			</div>
		</section>

		<section class="center-align">
			<?php require ('modals/solicitud.php'); ?>
			<?php require ('modals/acerca.php'); ?>
		</section>

		<section id="beneficios">
		<div class="row">
			<h3>Beneficios</h3>
		</div>
	
			<?php require ('templates/beneficios.php'); ?>

		</section>

		<section id="servicios">
		<div class="row">
			<h3>Servicios</h3>			
		</div>

			<?php require ('templates/tservicios.php'); ?>

		</section>
		<section id="certificaciones">
		<div class="row">
			<h3>Certificaciones</h3>			
		</div>

			<?php require ('templates/certifica.php'); ?>
	
		</section>

	</main>
	<?php require ('templates/footer.php'); ?>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

      $(document).ready(function(){

		$('#indexh').addClass('active');
        
      });

      </script>
</body>
</html>