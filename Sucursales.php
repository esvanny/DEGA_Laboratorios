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
      <main class="container center-align">
          <section id="modals">
            <?php require ('modals/acerca.php'); ?>
      </section>
      <section id="ubicaciones">
      <div class="row promo-caption" id="ubicaTemoluco">
            <h3>Sucursales</h3>
            <div class="col s12 m6 l6 ubicatxt">
            <strong>Laboratorios Clínicos Azteca</strong>
            <p>
            Boulvard Temoluco 372,<br>Acueducto de Guadalupe,07790 Ciudad de México, CDMX
            </p>
            </div>
            <div class="col s12 m6 l6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332.3686801595842!2d-99.15691790207265!3d19.527769116723533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f7880a5e8f1b%3A0xf4eb89f7e6321f8e!2sLaboratorios+Cl%C3%ADnicos+Azteca!5e0!3m2!1ses-419!2smx!4v1490114339065" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
      </div>
            
      </section>

      </main>

      <!--footer-->
      <?php require ('templates/footer.php'); ?>


      <!--Scripts-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

      $(document).ready(function(){

            $('#msucursales').addClass('active');        
        
      });


      </script>
</body>
</html>