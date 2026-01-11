<?php

// Initialize the session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
// Clear all session variables
$_SESSION = array();
// If it's desired to kill the session, also delete the session cookie.
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params['path'], $params['domain'],
    $params['secure'], $params['httponly']
  );
}
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Web app to daily task">
  <meta name="author" content="Alex V. Nunez">
  <title>To do App</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="css/signup.css" rel="stylesheet">
  <!--Instagram Font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
  <!--Font awesome-->
  <script src="https://kit.fontawesome.com/3414a1e80d.js" crossorigin="anonymous"></script>
  <style>
  .logoutbox{
  	width: 30%;
  	background-color: #000000;
  	color:white;
  	margin-top: 7%;
  	margin-right: auto;
  	margin-left: auto;
  	height: auto;
  	padding:4%;
  	border-radius: 10px;
  }
  </style>

</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tittle">
            <i class="fas fa-clipboard-list"></i>
            <h1>To Do APP</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col mr-auto ml-auto">
      	<div class="logoutbox">
          <H1>Logged Out</H1>
          <P>You are logged out of To-Do App.</P>
          <p><a href="index.php">Click here to log in again</a></p>
      	</div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>