<?php

function dbConnect (){
 	$conn =	null;
 	$host = 'https://www.db4free.net';
 	$db = 	'codecalltut';
 	$user = 'bnhs';
 	$pwd = 	'123456';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		echo 'Connected succesfully.<br>';
		
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
		echo '<p>'.$e.'</p>';
	    exit;
	}
	return $conn;
 
}


 //using dbconnect to connect to database
	$conn = dbConnect();
	
	//persistent connection
	$OK = true; // We use this to verify the status of the update.
	// If 'buscar' is in the array $_POST proceed to make the query.
	//if (isset($_GET['search'])) {
	if (isset($_SESSION['uname'])) {
		// Create the query
		$uname = $_SESSION['uname'];

//		$data = "%".$_GET['search']."%";
		$sql = "SELECT * FROM tblprereg WHERE username ='" . $uname . "';";
		// we have to tell the PDO that we are going to send values to the query
		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute();
		// Extract the values from $result
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
		//echo $error[2];
	}
	// end of persistence
 ?>
