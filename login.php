<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ACT Academy</title>
  <link href="css/htmlstyles.css" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

  <body>
  <div class="container-narrow">

		<div class="jumbotron">
			<p class="lead" style="color:white">
				ACT Academy
			</p>
        </div>

		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Username:  <input type="text" id="uid" name="uid"><br /></br />
				Password: <input type="password" id="password" name="password">
			</p>
			<br />
			<p>
			<input type="submit" value="Entrar"/>
			<input type="reset" value="Limpar campos"/>
			</p>
		</form>
    </div>


		<br />

      <div class="row marketing">
      <div class="col-lg-6">

<?php

if (!empty($_GET['msg'])) {
    echo "<font style=\"color:#FF0000\">Please login to continue.<br\></font\>";
}
//echo md5("pa55w0rd");

if (!empty($_REQUEST['uid'])) {
$username = ($_REQUEST['uid']);
// Anti SQL Injection //
//$username = str_replace(array("#", "'", ";", "!", "-"), '', $username);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;
//echo $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}

	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {

	$row = mysqli_fetch_array($result);

	if ($row){
	//$_SESSION["id"] = $row[0];
	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];
	//ob_clean();

	header('Location:index.php');
	}
}
	else{
		echo "<font style=\"color:#FF0000\"><br \>Invalid password!</font\>";

	}
}

//}
?>

	</div>
	</div>


	  <div class="footer">
		<p>ACT Tecnologia | @acttecnologia</p>
      </div>
	</div> <!-- /container -->

</body>
</html>
