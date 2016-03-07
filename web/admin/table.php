<link rel="stylesheet" href="pure-release-0.6.0/pure-release-0.6.0/pure-min.css">
<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'codecalltut';
 	$user = 'root';
 	$pwd = 	'';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected';
		
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
//query database
		$sql = "SELECT Student_ID, 
				CONCAT(Lastname, ', ', Firstname, ' ', LEFT(Middlename, 1),'.') AS nagan, 
				YearLevel, 
				Status, 
				SchoolYear, 
				Age, 
				BirthDate, 
				BirthPlace, 
				Religion,
				Address 
				FROM tblprereg
				ORDER BY Lastname ASC";
		// we have to tell the PDO that we are going to send values to the query
		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute();
		// Extract the values from $result
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
?>
		
<table class="pure-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>YearLevel</th>
            <th>Status</th>
            <th>Age</th>
			<th>Address</th>
        </tr>
    </thead>

    <tbody>

<?php	
		foreach ($rows as $row) {
?>
		
        <tr class="pure-table-odd">
		
			<td><?php print $row['Student_ID'] ?></td>
            <td><?php print $row['nagan'] ?></td>
			<td><?php print $row['YearLevel'] ?></td>
            <td><?php print $row['Status'] ?></td>
			<td><?php print $row['Age'] ?></td>
            <td><?php print $row['Address'] ?></td>
		
        </tr>

<?php
		}
	
?>
    </tbody>
</table>
