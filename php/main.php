 <?php
    include('db.php');
    include('session.php');

    $conn=connection(); 

    // get the information from the tasks
    $username = filter_input(INPUT_POST, 'username');
    $action = filter_input(INPUT_POST, 'action');
    $taskid = filter_input(INPUT_POST, 'task_id');
    $status = filter_input(INPUT_POST, 'status');
    $order1 = filter_input(INPUT_POST, 'todo_order');
    $order2 = filter_input(INPUT_POST, 'completed_order');
  

    if($action=="update_status"){
       $query="UPDATE projectdb.task SET Status = '$status' WHERE taskID = '$taskid'";
       updateQuery($query,$conn);
       header("location: ../main.php");
    }

    if($action=="delete_task"){
       $query="DELETE FROM projectdb.task WHERE taskID = '$taskid'";
       updateQuery($query,$conn);
       header("location: main.php");
    }

   
    //Send the query to show all todo tasks
    $query = "SELECT *FROM projectdb.task where Username = '$login_session' and Status=0 ORDER BY DueDate ".$order1;
    $todos= runQuery($query,$conn);

    //Send the query to show all completed task tasks
    $query = "SELECT *FROM projectdb.task where Username = '$login_session' and Status=1 ORDER BY DueDate ".$order2;
    $completed= runQuery($query,$conn);


    //Send the query to show all very important level task tasks
    $query = "SELECT *FROM projectdb.task where Username = '$login_session' and Status=0 AND Urgency='Very important'";
    $urgent= runQuery($query,$conn);
    $total_urgenttask=count($urgent);

    $totaltodos=count($todos);
    $totalcompleted=count($completed);

    if(($totaltodos+$totalcompleted)!=0){
        $todoPercent=number_format((($totaltodos/($totaltodos+$totalcompleted))*100),2)."%";
        $completedPercent=number_format((($totalcompleted/($totaltodos+$totalcompleted))*100),2)."%";
    }else{
        $todoPercent=0;
        $completedPercent=0;
    }

    function timereminder($duedate)
    {
        date_default_timezone_set('America/Toronto');
        $current_time=date('Y-m-d h:i:s a', time()); 
        $due_date=strtotime($duedate);

        $now=new DateTime($current_time);
        $due=new DateTime(date('Y-m-d h:i:s a', $due_date));
       

        $time_reminder= $now->diff($due);
        echo $time_reminder->format('%d');

        return $time_reminder;
    }
   
?>