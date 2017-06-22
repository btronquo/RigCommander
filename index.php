<?php
  // En cas de clic sur reboot
  if(isset($_POST['confirm']))
  {
    $contents = file_get_contents('/var/www/html/rigcmd/plugins/reboot.sh');
    echo shell_exec($contents);
    $message = "Rig rebooté avec succes!";
  }else{
    $message = "";
  }
require_once "inc/config.php";
require_once "inc/functions.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RIG COMMANDER</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
<!-- navbar -->
<?php include 'inc/navbar.php'; ?>

<div class="container">
  <h1>Bienvenue sur RIG COMMMANDER</h1>
  <p>Version <b>Alpha</b> - <b>non</b> completement fonctionnelle</p>
  <hr>
  <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-center">
                        <h3>RIG 04</h3>
                        <div>Connecté</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
              <a id="submit" class="btn btn-default" href="#" role="button">RESTART RIG #01</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-center">
                        <h3>RIG 04</h3>
                        <div>Connecté</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
              <a id="submit" class="btn btn-default" href="#" role="button" disabled>RESTART RIG #02</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-center">
                        <h3>RIG 04</h3>
                        <div>Connecté</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
              <a id="submit" class="btn btn-warning" href="#" role="button" disabled>RESTART RIG #03</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-center">
                        <h3>RIG 04</h3>
                        <div>Connecté</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
              <a id="submit" class="btn btn-warning" href="#" role="button" disabled>RESTART RIG #04</a>
            </div>
        </div>
    </div>
  </div>

<div class="row">
  <?php echo $message; ?>
</div>

<div class="row">
  <!-- compteur - test
  <div class="c100 p24 blue">
      <span>XXXH/s</span>
      <div class="slice">
          <div class="bar"></div>
          <div class="fill"></div>
      </div>
  </div>
  .fin compteur -->
</div>

<div class="row">
  <h2><i class="fa fa-cog fa-spin fa-fw"></i> Informations API -> EWFB</h2>
  <em>Mise à jour toutes les secondes</em>
  <div id="status"></div>
</div>

<div class="row">
  <h2><i class="fa fa-cog fa-spin fa-fw"></i> Informations Api -> Nanopool</h2>
  <em>Mise à jour toutes les secondes</em>
  <p>Pas encore implémenté!</p>
</div>

<div class="row">
  <p class="text-info">Pour le compte: <b><?php echo $datanano['data']['account']; ?></b></p>
  <div id="status2"></div>
</div>



<script src="js/scripts.js"></script>

</body>
</html>
