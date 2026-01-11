<?php
   include('php/db.php');
   include('php/session.php');
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
  <link href="css/addtask.css" rel="stylesheet">
  <!--Instagram Font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
 <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/main.css">

</head>

<body>
 
  <nav class="navbar navbar-expand-lg w3-top w3-theme-d2 pt-2 pb-2 text ">
    <div class="container-fluid w3-left-align w3-large">
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" >
          <a href="#" class="w3-bar-item w3-button w3-padding-xlarge "><i class="fa fa-home w3-margin-right"></i>To-Do App</a>

        </div>
      </div>

      <div>
        <div class="row align-items-start">
        <div class="col-8">
         <h3>
          <?php
            echo $login_session;
          ?>
        </h3>
      </div>
      <div class="col-4 mt-auto mb-auto">
         
            <div class="w3-dropdown-hover w3-hide-small">
              
              <img src="images/user.png" class="w3-circle " style="height:35px;width:35px" alt="Avatar">
              
              <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="left:-110px;">
               <a href="main.php#profile" class="w3-bar-item w3-button">My profile</a>
               <a href="main.php#" class="w3-bar-item w3-button">To-do Tasks</a>
               <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
              </div>
            </div>
      </div>
      </div>
    </div>
     <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    </div>
  </nav>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
  </div>

 <div class="container-page mt-5 pt-4 pb-4">
    <div class="row">
      <div class="col mr-auto ml-auto">
        
        <form name="addTaskForm" class="addTaskForm" action="php/addtask.php" method="post">
          <div class="imgcontainer">
            <h3 class="text-white">Add New Task</h3>
            <img src="images/to-do1.jpg" alt="Avatar" class="taskimg">s
          </div>

          <div class="container">
            
              <label for="Username"><b>Tittle</b></label>
              <input type="text" placeholder="Tittle" name="tittle" Id="Tittle"/>
              <div class="invalid-input">
                  An unexpected error has occured
              </div>
             
              <label for="Password"><b>Description</b></label>
              <input type="text" placeholder="Description" name="description" Id="Description"/>
              <div class="invalid-input">
                  An unexpected error has occured
              </div>
              
              <label for="task-urgency"><b>Urgency</b></label>
                <select class="form-select" aria-label="Default select example" name="taskurgency">
                  <option selected value="Normal">Normal</option>
                  <option value="Important">Important</option>
                  <option value="Very important">Very important</option>
                </select>
              <div class="invalid-input">
                  An unexpected error has occured
              </div>
              
              <label for="duedate">Due date (date and time):</label>
              <input type="datetime-local" id="duedate" name="duedate" class="date">
              <input type="hidden" name="username" value="<?php echo $username;?>"/>
              
              <button class="mt-2" type="submit">Add Task</button>
              
          </div>

        </form>
      </div>
    </div>
  </div>


  <script src="js/validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
