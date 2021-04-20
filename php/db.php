<?php
		
	function connection(){
		$servername = "localhost:4306";
		$username = "root";
		$password = "1234";
		$dbname = "projectdb"; // your database name
			
		try {
			$conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully"; 
			}
		catch(PDOException $e)
			{
			echo "Connection failed: " . $e->getMessage();
			}
		
		return $conn;
  }


  //-------------- Runs SQL query and returns results (if valid)------------------------------------
	function runQuery($query, $conn) {
		
	    try {
			$q = $conn->prepare($query);
			$q->execute();
			$results = $q->fetchAll();
			$q->closeCursor();
			return $results;	
		} catch (PDOException $e) {
			echo "Error";
			//$error_msg=new errorReport();
			//$error_msg->http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}	  
	}

	function updateQuery($query, $conn){
	 try {
        $q = $conn->prepare($query);
        $q->execute();
        $q->closeCursor();
      } catch (PDOException $e) {
        echo "Error";
      }
    } 


?>