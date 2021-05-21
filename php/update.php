<?php
   //include("db.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn=connection();
        //get the action to perform
        $action=filter_input(INPUT_POST, 'action');
       
        //get username and password sent from form
        $newusername = filter_input(INPUT_POST, 'username');
        $previousUsername = filter_input(INPUT_POST, 'previousUsername');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $newPassword= filter_input(INPUT_POST, 'password');

        //condition to check to update the username or password
        if($action=="edit_Username"){
            $query = "SELECT * FROM an74.user WHERE ((Username='$newusername'))";
            $result=runQuery($query,$conn);

            //Check if the username is already registered in the database
            if(count($result)<1){
              $query="UPDATE an74.user SET Username = '$newusername' WHERE Username = '$previousUsername'";
              updateQuery($query,$conn);
              header("location: index.php");
            }else{
              $errormsg="Username already exits";
            }
        }else{
           $query = "SELECT * FROM an74.user WHERE ((Username='$previousUsername'))";
           $result=runQuery($query,$conn);
           //Get the current password of the user
           $pass = $result[0][2];
           //Corvert the string password to an array
           $pswarray = explode(",", $pass);

           if(count($result)>0){

              $counter=0;
              //count the elements in the password's array
              if(count($pswarray)==3){
                   foreach ($pswarray as $elements){
                        //compare the new password with the two previous passwords
                        if($newPassword==$elements){
                            $counter++;
                        }
                    }

                    if($counter==0){
                        //Remove the first password from the password's array
                        array_shift($pswarray);
                        //Add the new password at the end of the array
                        array_push($pswarray, $newPassword);
                        // convert the password array to an string and update in the database
                        $newpass = implode(",", $pswarray);
                        $query="UPDATE an74.user SET Password = '$newpass' WHERE Password = '$pass'";
                        updateQuery($query,$conn);
                        header("location: index.php");
                    }else{
                        $errormsg= "Password can not be the same as two previous passwords";
                    }
              }else{
                     foreach ($pswarray as $elements){
                          if($newPassword==$elements){
                                 $counter++;
                          }
                     }

                     if($counter==0){
                        //Add the new password at the end of the array
                        array_push($pswarray, $newPassword);
                        // convert the password array to an string and update in the database
                        $newpass = implode(",", $pswarray);
                        $query="UPDATE an74.user SET Password = '$newpass' WHERE Password = '$pass'";
                        updateQuery($query,$conn);
                        header("location: index.php");
                     }else{
                        $errormsg= "Password can not be the same as two previous passwords";
                     }
              }
           }else{
              $errormsg="Something went wrong";
           }

        }
   }
?>