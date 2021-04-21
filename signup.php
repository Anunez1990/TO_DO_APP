<?php
    include("php/signup.php");
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
        <form name="loginForm"  class="loginForm" action="#" onsubmit="return(signUpValidation());" method="post">
          <div class="imgcontainer">
            <img src="images/user2.jpg" alt="Avatar" class="avatar">
            <div class="">
              <?php
                echo $error;
              ?>
            </div>
          </div>

          <div class="container">
            <label for="Username"><b>Username</b></label>
            <input type="text" placeholder="Username" name="username" Id="Username" required>
            <div class="invalid-input">
              Username not valid.
            </div>
            <label for="Email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" Id="Email">
            <div class="invalid-input">
             Email not valid.
            </div>
            <label for="Password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" Id="Password" >
            <div class="invalid-input">
              Password not valid.
            </div>
            <label for="FirstName"><b>First Name</b></label>
            <input type="text" placeholder="First Name" name="fname" Id="FirstName">
            <div class="invalid-input">
              First name not valid.
            </div>
            <label for="LastName"><b>Last Name</b></label>
            <input type="text" placeholder="Last Name" name="lname" Id="LastName">
            <div class="invalid-input">
             Last name not valid.
            </div>
            <button type="submit">Create Account</button>

          </div>

        </form>
      </div>
    </div>
  </div>
  <script src="js/signup.js"></script>
  <script src="js/validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
