<?php
session_start();

if (!isset($_SESSION['prenom'])) {
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="" content="">
    <meta name="" content="">
    <link rel="icon" href="logo.ico">

    <title>Fablart - Merci</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/yo.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">

            <h1 class="cover-heading">Merci <?php echo htmlentities($_SESSION['prenom']) ?> !</h1>
            <p class="lead">Tu recevras un e-mail dès la sortie de la version BETA de fablart.com, tu pourras alors prendre part à la conception du projet et nous transmettre tes commentaires.
            </br>
            </br>A bientôt.</p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="index.php">&copy Fablart</a> - inscription - <a href="contact.php">contact</a></p>
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