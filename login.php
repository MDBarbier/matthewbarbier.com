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
		<link rel="stylesheet" type="text/css" href="main-stylesheet.css">

		<!-- my .js library -->
		<script src="Scripts/library.js"></script>

		<!--Site icon-->
		<link rel="shortcut icon" type="image/x-icon" href="Images/site.ico" />

    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

	</head>

	<body>

		<!--Site background image-->
		<div>
  		<img src="Images/sunset.JPG" alt="" id="bg">
		</div>

		<div id="nav" class="nav navMain">

			<div class="col-md-12">
					<div data-toggle="collapse" data-target="#menuItemsDiv" class="nav-title">
						<span class="glyphicon glyphicon-menu-hamburger hamburger"></span>

					</div>

					<span class="glyphicon glyphicon-refresh changeBG" id="changeBG" onclick="backgroundSwitcher()" title="Switch theme"></span>
			</div>

			<div class="collapse voffset3" id="menuItemsDiv">

				<div class="row">
					<div class="col-md-12">
						<a href="https://www.matthewbarbier.com" target="_blank"><p class="nav-item">Home</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://uk.linkedin.com/in/matthew-barbier-028939b5" target="_blank"><p class="nav-item">LinkedIn</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://www.flickr.com/photos/142604114@N06/" target="_blank"><p class="nav-item">Flickr</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://github.com/SirBarbier?tab=repositories" target="_blank"><p class="nav-item">Github</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://jsfiddle.net/user/matt_b/fiddles/" target="_blank"><p class="nav-item">JSFiddle</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="http://steamcommunity.com/id/MattadorUk" target="_blank"><p class="nav-item">Steam</p></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://www.matthewbarbier.com/cpanel" target="_blank"><p class="nav-item">cPanel</p></a>
				  </div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="https://www.matthewbarbier.com/testexternalfiles" target="_blank"><p class="nav-item">Test external files</p></a>
					</div>
				</div>

			</div>
		</div>

		<div class="voffset10" id="header">
			<h1 class="banner title-banner">Login to matthewbarbier.com</h1>
		</div>

    <!-- main page content div-->
    <div class="row main-content">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <!-- insert page content here-->
          <?php
          if (empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
          {
              echo "You do not have a secure SSL connection! \n";
          }
          else {

            include_once '../includes/db_connect.php';
            include_once '../includes/functions.php';

            sec_session_start();

            if (login_check($mysqli) == true) {
                $logged = 'in';
            } else {
                $logged = 'out';
            }

            if (isset($_GET['error'])) {
              $error = $_GET['error'];
              echo '<p class="error">Error Logging In! Error: ' . $error . '</p>';
            }
            ?>

            <form action="processloginproxy" method="post" name="login_form" class="form-inline">
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="text"
											 id="email"
											 name="email"
											 class="form-control" />
								<label for="password">Password:</label>
								<input type="password"
                       name="password"
                       id="password"
											 class="form-control"/>
              	<input type="button"
                       value="Login"
                       onclick="formhash(this.form, this.form.password);"
										   class="btn btn-lg btn-primary" />
						  </div>

            </form>

            <?php
                    if (login_check($mysqli) == true) {
                                    echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';

                        ?>
												<input type="button"
					                     value="Logout"
					                     onclick="location.href = 'logoutproxy';"
															 class="btn btn-default"/>
												<?php
                    } else {
                                    echo '<p>Currently logged ' . $logged . '.</p>';
																		echo "<p>If you don't have a login, please register.</p>";
																		?>
																		<input type="button"
											                     value="Register"
											                     onclick="location.href = 'register';"
																					 class="btn btn-default btn-lg"/>
																		<?php
                            }
            }
          ?>

        </div>
        <div class="col-md-2"></div>

    </div>

		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">

					<div class="footer">

					</div>

				</div>
			</div>
		</div>

	</body>

</html>
