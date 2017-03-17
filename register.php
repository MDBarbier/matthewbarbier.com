<!DOCTYPE html>
<html>
	<head>
		<title>matthewbarbier.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>

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



    <!-- main page content div-->
    <div class="row main-content" style="top:15%;">
        <div class="col-md-2"></div>
        <div class="col-md-8">


          <!-- insert page content here-->

          <?php
            include_once '../includes/register.inc.php';
            include_once '../includes/functions.php';
            ?>
          <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form class="form-inline" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">Username:</div>
              <div class="col-md-6"><input type='text' name='username' id='username' class="form-control" style="width: 300px; max-width:300px;" /><br></div>
            </div>
            <div class="row">
              <div class="col-md-6">Email:</div>
              <div class="col-md-6"><input type="text" name="email" class="form-control" id="email" style="width: 300px; max-width:300px;" /><br></div>
            </div>
            <div class="row">
              <div class="col-md-6">Password:</div>
              <div class="col-md-6"><input type="password" class="form-control" name="password" id="password" style="width: 300px; max-width:300px;"/><br></div>
            </div>
            <div class="row">
              <div class="col-md-6">Confirm password:</div>
              <div class="col-md-6"><input type="password" name="confirmpwd" id="confirmpwd" class="form-control" style="width: 300px; max-width:300px;" /><br></div>
            </div>
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"><input type="button" class="form-control btn btn-danger" value="Register"
                     onclick="return regformhash(this.form,
                                     this.form.username,
                                     this.form.email,
                                     this.form.password,
                                     this.form.confirmpwd);" style="font-size: 0.55em; width: 100px;" /></div>
            </div>
          </div>
        </form>
        <div onclick="window.location.href='login';" style="cursor:pointer;"><p>Return to the login page by clicking here.</p></div>

        </div>
        <div class="col-md-2"></div>

    </div>

		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">

					<div class="footer">

							<?php
							if (empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
							{
									echo "You do not have a secure SSL connection! \n";
							}
							?>

					</div>

				</div>
			</div>
		</div>

	</body>

</html>
