<?php
   include("db.php");
   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn=connection();
        // username and password sent from form
        $myusername = filter_input(INPUT_POST, 'Username');
        $mypassword = filter_input(INPUT_POST, 'Password');
        	     
        $query = "SELECT * FROM an74.user WHERE ((Username='$myusername' OR Email='$myusername'))";

        //AND Password='$mypassword')
        $results=runQuery($query,$conn);

		$count = count($results);
        // If result matched $myusername and $mypassword, table row must be 1 row
		
       if($count == 1) {
         //compare the password
         $password = $results[0][2];
         $pswarray = explode(",", $password);
         $currentpsw= array_pop($pswarray);

         if($currentpsw==$mypassword){
             session_start();
             $_SESSION['login_user'] = $myusername;
             $error="";
             header("location: main.php");
         }else{
             $error = "Username or Password incorrect";
         }
       }else {
          $error = "Username or Password incorrect";
       }
   }
?>