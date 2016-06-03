<?php
session_start();

if (!isset($_SESSION['echec'])) {
  header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="" content="">
    <meta name="" content="">
    <link rel="icon" href="logo.ico">

    <title>Fablart - Echec de l'envoi</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/yo.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">

            <h1 class="cover-heading">Echec de l'envoi.</h1>
            <p class="lead">Veuillez réessayer plus tard ou nous contacter directement à :</br></br>hello@fablart.com</p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="index.php">&copy Fablart</a> - <a href="inscription.php">inscription</a> - contact</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </body>
</html>

<?php
session_destroy();
?>