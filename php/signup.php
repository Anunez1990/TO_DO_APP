<?php
   include("db.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        // get username and password sent from the form 
        $username = filter_input(INPUT_POST, 'username');
        $email= filter_input(INPUT_POST, 'email');
        
	      $conn=connection();	
      
	      //Check if the user is already register in the database 
        $query = "SELECT * FROM projectdb.user WHERE ((Username='$username' OR Email='$email'))";     	  
        $result=runQuery($query,$conn);
		    $count = count($results);

        //If a user is foun with the given username print and error
        if($count>0){
          echo "User already exits";
        }else{

          //---------------------- INSERT A NEW RECORD ----------------------------
          $password= filter_input(INPUT_POST, 'password');
          $fname= filter_input(INPUT_POST, 'fname');
          $lname= filter_input(INPUT_POST, 'lname');

          $query ="INSERT INTO projectdb.user(Username,Email,Password, FirstName, Lastname)VALUES('$username','$email','$password','$fname','$lname')";
          runQuery($query,$conn);
          header("location: ../index.php");
        }

   }
?>