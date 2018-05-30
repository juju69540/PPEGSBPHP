<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>
    <?php
      $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      
      // echo $monUrl;
      if($monUrl == 'http://localhost/PPEGSBPHP%20-%20Copie/index.php?uc=connexion&action=valideConnexion' || $monUrl == 'http://localhost/PPEGSBPHP%20-%20Copie/' || $monUrl == 'http://localhost/PPEGSBPHP%20-%20Copie/index.php?uc=connexion&action=deconnexion')
        {

        }
      else{
      ?>
        <div id="page">
            <div id="entete">
              <!-- <img src="./images/logoo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /> -->
              <h1>Suivi du remboursement des frais</h1>
            </div>
        </div>
      <?php
        }
      ?>
      
  <script src="js/bootstrap.min.js"></script>
   </body>