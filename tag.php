<!DOCTYPE html>
<html>
<head>
<title>matthewbarbier.com</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--my custom css-->
		<link rel="stylesheet" type="text/css" href="matt.css">

    <!-- my JavaScript library-->
		<script src="myJavaScriptLibrary.js"></script>

    <script type="text/JavaScript">

      window.onload = function()
		  {
        if (doesPlayerExist())
        {
          var playerName = getPlayerName();
          document.getElementById("result").innerHTML = "Welcome back, " + playerName;
        }
		  }

      function start()
      {
          var name = document.getElementById("nameTextBox").value;
          //window.alert("Hello " + name);
          storePlayerName(name);
          var playerName = getPlayerName();
          document.getElementById("result").innerHTML = "Welcome to your Adventure, " + playerName;
      }

    </script>

</head>

<body>
<div class="container text-center" id="error">
  <div class="row">
    <div class="col-md-12">
      <div class="voffset7">
	  <h1 class="jumbotron">TAG (Text Adventure Game)</h1>
	  <br />
	  <br />
  <p>Enter your name and click the button...</p>
	  <input type="text" id="nameTextBox"></input>
    <button type="button" onclick="start()" id="startButton">Begin your Adventure</button>
      <button type="button" onclick="testJavaScript()">test</button>
  <label id="result"></label>
	  <br />
	  <br />
	  <div class="voffset3"></div>
	  <p class="well">Click here to return to the <a href="http://www.matthewbarbier.com/home.html">matthewbarbier.com</a> homepage.</p>


    </div>
  </div>

</div>

</body>
</html>
