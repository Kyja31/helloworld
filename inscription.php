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

    <title>Fablart - Inscription</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/yo.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">

            <form action="inscriptionpost.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1" class="lead">Adresse e-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required>
              </div>

              <div class="form-group">
                <label class="lead">Prénom</label>
                <input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
              </div>

              <div class="form-group">
                <label class="lead">Nom</label>
                <input type="text" name="lastname" class="form-control" placeholder="Nom" required>
              </div>

              <button type="submit" class="btn btn-lg btn-default">Envoyer</button>
            </form>
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