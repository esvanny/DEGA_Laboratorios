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

      <!--Header-->      
      <?php require ('templates/header.php'); ?>

      <!--Main-->
      <main>
          <section id="modals">
            <?php require ('modals/acerca.php'); ?>
            </section>  
      </main>

      <!--footer-->
      <?php require ('templates/footer.php'); ?>


      <!--Scripts-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

      $(document).ready(function(){

            $('#mempresas').addClass('active');

      });


      </script>
</body>
</html>