<?php
ob_start();
session_start();


?>
<html>
<head>
<!-- JQUERY -->
<script src="jquery-3.1.1.js"></script>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- FIREBASE -->
<script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDsbrAiAbEjj-r04y6nN497GswFnj7f5aw",
    authDomain: "pondur-5487b.firebaseapp.com",
    databaseURL: "https://pondur-5487b.firebaseio.com",
    storageBucket: "pondur-5487b.appspot.com",
    messagingSenderId: "375316076570"
  };
  firebase.initializeApp(config);
</script>
<!-- MY STYLES -->
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container" id="cntnr">
	<nav class="navbar navbar-toggleable-md navbar-default bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<img src="brain.png" width="30" height="30" class="d-inline-block align-top" alt="">
		<a class="navbar-brand" id="brandname" href="index.php">Pondur</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
				<li class="nav-item">
					<a class="nav-link" href="login.php">Sign in/up</a>
				</li>
			</ul>
	  </div>
	</nav>

	<div class="row">
		<div class="col-9" id="main">
			main
		</div>
		<div class="col-3" id="sidebar">
			sidebar
		</div>
	</div>
	<div class="row" id="post">
		<div class="col-12">
		post
		</div>
	</div>
</div>
</body>
</html>