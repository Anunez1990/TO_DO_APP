<?php
    session_start();
   
    $user_check = $_SESSION['login_user'];
    
    //Get the information of the current user
    $conn=connection();	
    $query = "SELECT * FROM projectdb.user WHERE ((Username='$user_check' OR Email='$user_check'))"; 
    $row=runQuery($query,$conn);
  	
    $login_session = $row[0][0];
    $username=$row[0][0];
    $email = $row[0][1];
    $password = $row[0][2];
    $fname = $row[0][3];
    $lname = $row[0][4];

    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }

    
?>