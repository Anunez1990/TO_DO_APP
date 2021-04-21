<?php
   include("db.php");

   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
        $myusername = filter_input(INPUT_POST, 'Username');
        $mypassword = filter_input(INPUT_POST, 'Password');
        
	      $conn=connection();	
        	     
        $query = "SELECT * FROM an74.user WHERE ((Username='$myusername' OR Email='$myusername') AND Password='$mypassword')";
    
        $results=runQuery($query,$conn);
    
		    $count = count($results);
        // If result matched $myusername and $mypassword, table row must be 1 row
		
       if($count == 1) {
          session_start();
          //session_register("myusername");
          $_SESSION['login_user'] = $myusername;
          //echo "Usuario valido";
         $error="";
          header("location: main.php");

       }else {
          $error = "Username or Password incorrect";
       }
   }
?>