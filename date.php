<?php
date_default_timezone_set('America/Toronto');

$current_time=date('Y-m-d h:i:s a', time()); 
$due_date=strtotime("2021-04-27 09:59:00");

echo($current_time);
$now=new DateTime($current_time);
$due=new DateTime(date('Y-m-d h:i:s a', $due_date));
print_r($due);
echo "</br>";

$time_reminder= $now->diff($due);
echo $time_reminder->format('%d');
echo "</br>";

?>