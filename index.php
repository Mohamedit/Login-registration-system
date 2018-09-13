<?php
	include 'inc/classes/DB.php';
	// allow the footer
	define('ALLOW-FOOTER', true);
	// allow the config
	define('__CONFIG__', true);
	// require the config 
	require_once "inc/config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Cmpatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="roobts" content="follow" />

	<title></title>
	<base href="/" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/css/uikit.min.css" />

</head>
<body>
	<div class="uk-section uk-container">
		<?php
			echo "Hello this is my registeration system for you<br />";
			echo "The date is " . date("Y m d");
		 ?>
		 <p>
		 	<a href="http://localhost/PHP_lesons/Login-registration-system/Login.php">Login</a>
		 	<a href="http://localhost/PHP_lesons/Login-registration-system/Register.php">Register</a>
		 </p>
	</div>
<?php
	require_once "inc/footer.php"; 
?>
</body>
</html>