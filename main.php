<?php
  include('php/main.php'); 
?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/main.css">

<body>
<nav class="navbar navbar-expand-lg w3-top w3-theme-d2 pt-2 pb-2 text ">
  <div class="container-fluid w3-left-align w3-large">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
        <a href="#" class="w3-bar-item w3-button w3-padding-xlarge "><i class="fa fa-home w3-margin-right"></i>To-Do App</a>
       
        <div class="w3-dropdown-hover w3-hide-small">
          <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green"><?php echo $total_urgenttask;?></span></button>
          <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
            <a href="#urgentTasks" class="w3-bar-item w3-button">Urgent Tasks</a>
          </div>
        </div>
      </div>
    </div> 

       <div class="mr-auto">
          <div class="row align-items-start">
          <div class="col-8">
           <h3>
            <?php
              echo $login_session;
            ?>
          </h3>
        </div>
        <div class="col-4 mt-auto mb-auto ">
          
            <div class="w3-dropdown-hover w3-hide-small">
              
              <img src="images/user.png" class="w3-circle " style="height:35px;width:35px" alt="Avatar">
              
              <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="left:-110px;">
                <a href="#profile" class="w3-bar-item w3-button">My profile</a>
                <a href="#" class="w3-bar-item w3-button">To-do Tasks</a>
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

  <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- PROFILE -->
        <div class="w3-card w3-round w3-white" id="profile">
          <div class="w3-container">
            <h2 class="w3-center">
              <?php
                echo $login_session;
              ?>
            </h2>
            <p class="w3-center"><img src="images/user.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
            <hr>

            <div class="w3-container w3-display-container  w3-margin-bottom ">
              <span onclick="profile();" class="w3-button w3-theme-l3 w3-display-topright">
                <i class="fa fa-pencil"></i>
              </span>
              <h4 class="w3-center">My Profile</h4>
            </div>

            <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>
              <?php
                echo $fname." ".$lname;
              ?>
            </p>
           
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i> 

              <?php
                echo $email;
              ?></p>
            </p>
           <!--   <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p> -->
             
             <a href="logout.php" class="logout" style="text-decoration: none;"><p><button class="w3-button w3-block w3-theme-l4">Logout</button></p></a>
          </div>
        </div>
        <br>

        <br>


        <!-- End Left Column -->
      </div>

      <!-- Middle Column -->
      <div class="w3-col m7">

       <!-- DO TO TASKS SECTION-->
        <div class="w3-container w3-card w3-white w3-round w3-margin  pl-2 pr-2 "><br>

            <div class="w3-container w3-display-container" style="display:inline-block; width:100%">
            <img src="images/to-do.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
              <h4 >To-Do Tasks</h4><br>

              <div class="row ">
                 <form action="#" method="post">
                    <input type="hidden" name="todo_order" value="ASC"/>
                    <button  onclick="submit();" class="w3-button w3-theme-l3 w3-display-topright mb-2" style="height:35px;">
                    <i class="fa fa-sort-up w3-xlarge" style="height:20px;"></i>
                    </button>
                  </form>
              </div>
              <div class="row">
                <form action="#" method="post">
                    <input type="hidden" name="todo_order" value="DESC"/>
                    <button onclick="submit();" class="w3-button w3-theme-l3 w3-display-bottomright pb-2" style="height:35px;">
                    <i class="fa fa-sort-down w3-xlarge"></i>
                    </button>
                </form>
              </div>

            </div>

          <hr class="w3-clear">
        <!---------------TASK CONTAINER ----------------- -->
        <!--Tasks List-->
        <?php foreach ($todos as $task) : ?>
          <div class="w3-container w3-card w3-round pt-2 mb-2">  
            <div class="row mr-0">
                <div class="col-lg-9 col-sm-8">
                    <strong> <?php echo $task[2]; ?></strong>
                    <p class="pl-4 mt-2"><?php echo $task[3]; ?></p>
                    <p class="pl-4 mt-0"> timer reminder: <?php timereminder($task[5])?> days left</p>
                </div>   
                
                <div class="col-1">
                     <form action="php/main.php" method="post">
                        <input type="hidden" name="action" value="update_status"/>
                        <input type="hidden" name="status" value="1"/>
                        <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                        <button type="button" class=" w3-theme-l3 w3-button " style="height:40px;">
                          <input type="checkbox"  onChange="submit();"></i>
                        </button>
                     </form>
                </div>

                <div class="col-1">
                  <form action="edit_task.php" method="post">
                      <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                      <button type="submit" class=" w3-theme-l3 w3-button" style="height:40px;"><i class="fa fa-pencil"></i></button>  
                  </form>
                </div>

                <div class="col-1">
                   <form action="#" method="post">
                      <input type="hidden" name="action" value="delete_task"/>
                      <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                      <button type="button" class=" w3-theme-d2 w3-button" style="height:40px;" onclick="submit();">
                          <i class="fa fa-trash"></i>
                      </button> 
                    </form> 
                </div>  
           </div>
          </div> <!-- End  task container-->
         <?php endforeach; ?>
         
          <hr class="w3-clear">

           <div class="w3-container w3-display-container w3-hide-small" style="display:inline-block; width:100%">
              <h5 >Add a new task</h5><br>
              <span onclick="addTask();" class="w3-button w3-theme-l3 w3-display-topright">
              <i class="fa fa-plus w3-xlarge"></i>
              </span>
            </div>
          
      </div>

         <!-- COMPLETED TASK SECTION-->
        <div class="w3-container w3-card w3-white w3-round w3-margin  pl-2 pr-2 "><br>

           <div class="w3-container w3-display-container w3-hide-small" style="display:inline-block; width:100%">
            <img src="images/completed.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
              <h4 >Completed Tasks</h4><br>
              
              <div class="row ">
                 <form action="#" method="post">
                    <input type="hidden" name="completed_order" value="ASC"/>
                    <button  onclick="submit();" class="w3-button w3-theme-l3 w3-display-topright" style="height:35px;">
                    <i class="fa fa-sort-up w3-xlarge" style="height:20px;"></i>
                    </button>
                  </form>
              </div>
              <div class="row">
                <form action="#" method="post">
                    <input type="hidden" name="completed_order" value="DESC"/>
                    <button onclick="submit();" class="w3-button w3-theme-l3  w3-display-bottomright pb-2" style="height:35px;">
                    <i class="fa fa-sort-down w3-xlarge"></i>
                    </button>
                </form>
              </div>
            </div>

          <hr class="w3-clear">
          
           <?php foreach ($completed as $task) : ?>
            <div class="w3-container w3-card w3-round pt-2 mb-2">  
              <div class="row align-items-start mr-0">
                  <div class="col-9">
                      <strong> <?php echo $task[2]; ?></strong>
                      <p class="pl-4 mt-2"><?php echo $task[3]; ?></p>
                      <p class="pl-4 mt-0"> timer reminder: <?php timereminder($task[5])?> days ago</p>
                  </div>   
                  
                 <div class="col-1">
                     <form action="php/main.php" method="post">
                        <input type="hidden" name="action" value="update_status"/>
                        <input type="hidden" name="status" value="0"/>
                        <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                        <button type="button" class="w3-button w3-theme-l3 w3-margin-bottom" style="height:40px;">
                          <input type="checkbox"  onChange="submit();"></i>
                        </button>
                     </form>
                </div>

                 <div class="col-1">
                  <form action="edit_task.php" method="post">
                      <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                      <button type="submit" class=" w3-theme-l3 w3-button" style="height:40px;"><i class="fa fa-pencil"></i></button>  
                  </form>
                </div>

                <div class="col-1">
                   <form action="#" method="post">
                      <input type="hidden" name="action" value="delete_task"/>
                      <input type="hidden" name="task_id" value="<?php echo $task[0]?>"/>
                      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom" style="height:40px;" onclick="submit();">
                          <i class="fa fa-trash"></i>
                      </button> 
                    </form> 
                </div>

             </div>
            </div> <!-- End  task container-->
          <?php endforeach; ?>
      </div>
 
     
        <!-- End Middle Column -->
      </div>

      <!-- Right Column -->
      <!-- STATISTICS SECTION -->
      <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container ">
                <h4 class="w3-button w3-theme-l1" style="width:100%">Statistics</h4>
                <p class="text-left">To Do Tasks: <?php echo $totaltodos; ?></p>
                <div class="w3-grey mb-2">
                  <div class="w3-container w3-center w3-padding w3-orange" style="width:<?php echo $todoPercent;?>"><?php echo $todoPercent; ?></div>
                </div>

                <p class="text-left">Completed Tasks: <?php echo $totalcompleted; ?></p>
                <div class="w3-grey mb-4">
                  <div class="w3-container w3-center w3-padding w3-green" style="width:<?php echo $completedPercent;?>"><?php echo $completedPercent; ?></div>
                </div>

               <!--  <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
          </div>
        </div>
        <br>

      <!-- URGENT TASKS -->
        <div class="w3-card w3-round w3-white w3-center" id="urgentTasks">
          <div class="w3-container pb-4">
            <h4 class="w3-button w3-theme-l1" style="width:100%">Urgent Tasks</h4>
            <?php foreach ($urgent as $task) : ?>
              <div class="w3-container w3-card w3-round pt-2 mb-1">  
                <div class="row ">
                      <p class="m-0 pl-1"><strong> <?php echo $task[2];?></strong></p>
                </div>
                <div class="row ">
                      <p class="mt-0 pl-1"><?php echo $task[3]; ?></p>
                </div>
                <div class="row pr-0">
                       <p class="mt-0"> timer reminder: </p></br>
                       <p class="mt-0"> <?php timereminder($task[5])?> days left</p>
                </div>
                
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <br>
        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>
  <br>

  <!-- Footer -->
  <footer class="w3-container w3-theme-d2 pt-3 ">

    <div class="container-fluid text-center">
      
        <i class="social-icon fa fa-facebook-f"></i>
        <i class="social-icon fa fa-twitter"></i>
        <i class="social-icon fa fa-instagram"></i>
        <i class="social-icon fa fa-envelope"></i>
  
        <p class="mt-1">© Copyright 2020 Alex V. Nunez</p>
        <p class="mt-1">
        <a href="#">Back to top</a>
      </p>
    </div>
</footer>

 <script>
    // Accordion
    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
      } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
          x.previousElementSibling.className.replace(" w3-theme-d1", "");
      }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    function profile(){
      window.location.href="profile.php";
    }

    function addTask(){
      window.location.href="add_task.php";
    }

     function editTask(){
      window.location.href="edit_task.php";
    }
  

  </script>

</body>
</html>
