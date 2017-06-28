<!DOCTYPE html>
<html lang="en">
<head>
	<title>Michelle's Kitchen - Landing Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

	<link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />

	<style>

		/* http://css-tricks.com/perfect-full-page-background-image/ */
		html {
			background: url("img/pumpkinsoup.jpg") no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		body {
			padding-top: 20px;
			font-size: 16px;
			font-family: "Open Sans",serif;
			background: transparent;
		}

		h1 {
			font-family: "Abel", Arial, sans-serif;
			font-weight: 400;
			font-size: 40px;
		}

		/* Override B3 .panel adding a subtly transparent background */
		.panel {
			background-color: rgba(255, 255, 255, 0.8);
			margin-top: 10%;
		}

		.margin-base-vertical {
			margin: 40px 0;
		}


	</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 panel panel-default">

				<h1 class="margin-base-vertical text-center">Bienvenue!</h1>

				<p>
					While this site is currently under construction, Michelle's kitchen
					in Orange is up and ready to go! 
					If you're interested in booking a class, please shoot an email over to michelle@mkorange.com
				</p>

				<p style= "padding-bottom:10px">
					Don't forget to check back soon!
				</p>
<!--
				<form class="margin-base-vertical">
					<p class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
						<input type="text" class="form-control input-lg" name="email" placeholder="johnsmith@example.com" />
					</p>
					<p class="text-center">
						<button style = "background-color: #ff8533; border-color: #ffbf80; margin-top: 16px"type="submit" name="submit" class="btn btn-success btn-lg">Let's cook.</button>
					</p>
					</span>
				</form> -->

			</div><!-- //main content -->
		</div><!-- //row -->
	</div> <!-- //container -->
</body>
</html>