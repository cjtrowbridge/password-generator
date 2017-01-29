<?php

if(isset($_REQUEST['generate'])){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	
	for ($i = 0; $i < intval($_REQUEST['generate']); $i++) {
		$string .= $characters[mt_rand(0, strlen($characters) - 1)];
	}
	
	die($string);
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Password Generator</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-dark bg-primary container">
    <a class="navbar-brand" href="https://password-generator.cjtrowbridge.com">Password Generator</a>
  </nav>

  <div class="container" id="bodyContainer">
    Size: 
    <button type="button" class="btn btn-secondary">8</button>

  </div><!-- /.container -->
  <script>
    function MakePassword(size){
      $.get('./?generate='+size, function(data){
        $("#bodyContainer").append('<div class="card"><div class="card-block"><h4 class="card-title">Generated '+size+' Byte Password</h4><p class="card-text">'+data+'</p></div></div>');
      });
    }
  </script>
</body>
</html>
