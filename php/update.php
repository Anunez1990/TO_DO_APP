<?php
   include("db.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        //get the action to perform
        $conn=connection(); 
        $action=filter_input(INPUT_POST, 'action');
        echo $action;
       
        // get username and password sent from form 
        $newusername = filter_input(INPUT_POST, 'username');
        $previousUsername = filter_input(INPUT_POST, 'previousUsername');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $newPassword= filter_input(INPUT_POST, 'password');

        echo "</br>";
        echo "</br>";

        if($action=="edit_Username"){
            $query = "SELECT * FROM projectdb.user WHERE ((Username='$newusername'))";
            echo $query;
            $result=runQuery($query,$conn);

            //Check if the unername is already registered in the database
            if(count($result)<1){
              $query="UPDATE projectdb.user SET Username = '$newusername' WHERE Username = '$previousUsername'";
              echo $query;
              updateQuery($query,$conn);
               //header("location: ../index.php");
            }else{
              $error="Username already exits";
              //header("location: ../profile.php");
            }
        }else{
           $query = "SELECT * FROM projectdb.user WHERE ((Username='$previousUsername'))";
           echo $query;
           $result=runQuery($query,$conn);

           if(count($result)>0){
              $query="UPDATE projectdb.user SET Password = '$newPassword' WHERE Password = '$confirmPassword'";
              echo $query;
              updateQuery($query,$conn);
              //header("location: ../index.php");
           }else{
               $error="Somenthing went wrong";
           }

        }
   }
?>