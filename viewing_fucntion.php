<?php
	session_start();
	require_once 'codecall/fuckphp.php';
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
	// If there are no records.
	if(empty($rows)) {
		echo "<tr>";
			echo "<td colspan='4'>There were no records</td>";
		echo "</tr>";
	}
	else {
		foreach ($rows as $row) {
		
		$username=$row['username'];
		$password=$row['password'];
	
		$level=$row['YearLevel'];
		$status=$row['Status'];
		$year=$row['SchoolYear'];
		$studentid=$row['Student_ID'];
		$lastname=$row['Lastname'];
		$firstname=$row['Firstname'];
		$middlename=$row['Middlename'];
		$gender=$row['Gender'];
		$bdate=$row['BirthDate'];
		$age=$row['Age'];
		$bplace=$row['BirthPlace'];
		$religion=$row['Religion'];
		$email=$row['Email'];
		$presentadd=$row['Address'];
		$guardian=$row['Guardian'];
		$relationship=$row['Relationship'];
		$emergency=$row['Emergency'];
		$erelationship=$row['ERelationship'];
		$eaddress=$row['EAddress'];
		$emergencyaddress=$row['EAddress'];
		$cp=$row['CPnumber'];
		
		}
	}
?>
