<!DOCTYPE html>
<html>
	<head>
		<title>matthewbarbier.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--my custom css-->
		<link rel="stylesheet" type="text/css" href="matt.css">

	</head>

	<body>

		<div class="container text-center" id="error">
			<div class="row">
				<div class="col-md-12">
					<div class="voffset7">
						<h1 class="jumbotron">Welcome to matthewbarbier.com</h1>
					</div>
					<?php

					if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
					{
					    // SSL connection
							echo "You are connected by a secure SSL session.<br />";
							?><span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=RoVsmY7ZZuqIUxcfBr3rWRui5QtVE5XLhISrqs07MozfVMNa8C6aNwnUYMaH"></script></span>
							<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
							<?php
					}
					else {
						echo "You do not have a secure connection!";
					}
					?>
					<div class="well">
						<span class="glyphicon glyphicon-cog"></span><a href="https://www.matthewbarbier.com/cpanel" target="_blank"> cPanel</a>
					</div>
				</div>
			</div>

		</div>

	</body>

</html>
