<?php
  include_once '../includes/db_connect.php';
  include_once '../includes/functions.php';
  //$page = $_SERVER['PHP_SELF'];
  //$sec = "10";
  sec_session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>matthewbarbier.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="<?php //echo $sec?>;URL='<?php //echo $page?>'">-->
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


		<div id="nav" class="nav navMain">

			<div class="col-md-12">
					<div data-toggle="collapse" data-target="#menuItemsDiv" class="nav-title">
						<span class="glyphicon glyphicon-menu-hamburger hamburger"></span>

					</div>

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

				<?php if (login_check($mysqli) == true) : ?>
          <div class="row">
  					<div class="col-md-12">
  						<button type="button" class="btn btn-danger btn-lg nav-item" onclick="location.href = 'logoutproxy';">
  	          	<span class="glyphicon glyphicon-lock"></span> Logout
  	        	</button>
  					</div>
  				</div>
      <?php else : ?>
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-danger btn-lg nav-item" onclick="location.href = 'login';">
              <span class="glyphicon glyphicon-lock"></span> Login
            </button>
          </div>
        </div>
      <?php endif; ?>

			</div>
		</div>

		<div class="voffset10" id="header">
			<h1 class="banner title-banner">Dice roller</h1>
		</div>

    <!-- main page content div-->
    <div class="row main-content">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <!-- insert page content here-->
          <?php if (login_check($mysqli) == true) : ?>
            <div class="row">
    					<div class="col-md-12">
                <input type="button" value="Roll D4" onclick="contactDiceServer('D4');" class="btn btn-default" style="font-size:x-large;">
                <input type="button" value="Roll D6" onclick="contactDiceServer('D6');" class="btn btn-default" style="font-size:x-large;">
                <input type="button" value="Roll D8" onclick="contactDiceServer('D8');" class="btn btn-default" style="font-size:x-large;">
                <input type="button" value="Roll D10" onclick="contactDiceServer('D10');" class="btn btn-default" style="font-size:x-large;">
                <input type="button" value="Roll D12" onclick="contactDiceServer('D12');" class="btn btn-default" style="font-size:x-large;">
                <input type="button" value="Roll D20" onclick="contactDiceServer('D20');" class="btn btn-default" style="font-size:x-large;">
    					</div>
    				</div>
        <?php else : ?>
          <div class="row">
            <div class="col-md-12">
              <h1>You must be logged in to use this tool. Use the menu on the left, click "Login", then either log in or register.</h1>
            </div>
          </div>
        <?php endif; ?>

            <br />
          <label for="result" class="voffset6 hidden" id="resultlabel">Result:</label>
          <div id="result" style="font-size:xx-large"></div>
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
