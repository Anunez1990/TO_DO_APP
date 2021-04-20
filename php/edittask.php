<?php
   include("db.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	    $conn=connection();	
      // get the information to add the new task 
      $taskid = filter_input(INPUT_POST, 'taskid'); 
      $title = filter_input(INPUT_POST, 'tittle'); 
      $description = filter_input(INPUT_POST, 'description');
      $urgency = filter_input(INPUT_POST, 'taskurgency');
      $duedate = filter_input(INPUT_POST, 'duedate');
     
      
      //---------------------- INSERT A NEW TASK ----------------------------
      $query="UPDATE projectdb.task SET Title = '$title', Description='$description', Urgency='$urgency', DueDate='$duedate' WHERE taskID = '$taskid'";
     updateQuery($query,$conn);
     header("location: ../main.php");
  }

?>