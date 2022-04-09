<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ACT Academy</title>
  <link href="css/htmlstyles.css" rel="stylesheet">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

  <body>
  <div class="container-narrow">

		<div class="jumbotron">
			<p class="lead" style="color:white">
				Bem vindo <?php echo $_SESSION["username"]; ?>!! Você está autenticado!</a>
			</p>
        </div>

	  <div class="footer">
		<p><h4><a href="logout.php">Sair</a><h4> </p>
      </div>

	  <div class="footer">
		<p>ACT Tecnologia | @act.acad</p>
      </div>

	</div>
  <!-- /container -->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
