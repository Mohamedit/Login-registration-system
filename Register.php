<?php
	
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
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">

			<form class="uk-form-stacked js-register">

				<h2>Register</h2>
				
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="type your email">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="type your password">
			        </div>
			    </div>

			    <div class="uk-margin">
					<button class="uk-button uk-button-default" type="submit">Register</button>
			    </div>
			    </div>
			</form>
			
		</div>
	</div>
<?php
	require_once "inc/footer.php"; 
?>
</body>
</html>