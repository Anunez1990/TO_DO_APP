<?php
   include("db.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	    $conn=connection();	
      // get the information to add the new task 
      $username = filter_input(INPUT_POST, 'username'); 
      $title = filter_input(INPUT_POST, 'tittle'); 
      $description = filter_input(INPUT_POST, 'description');
      $urgency = filter_input(INPUT_POST, 'taskurgency');
      $duedate = filter_input(INPUT_POST, 'duedate');
    
     
     
      //---------------------- INSERT A NEW TASK ----------------------------
      $query ="INSERT INTO an74.task(Username,Title,Description,Urgency,DueDate,Status)VALUES('$username','$title','$description','$urgency','$duedate',0)";
      updateQuery($query,$conn);
      header("location: ../main.php");
  }

?>