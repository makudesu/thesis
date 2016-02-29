<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
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
		$sql = "SELECT * FROM tblprereg;";
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
            <th>PK</th>
            <th>Name</th>
            <th>YearLevel</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

<?php	
		foreach ($rows as $row) {
?>

        <tr class="pure-table-odd">
            <td><?php print $row['userID'] ?></td>
            <td><?php print $row['username'] ?></td>
			<td><?php print $row['YearLevel'] ?></td>
            <td><?php print $row['Status'] ?></td>
        </tr>

<?php
		}
	
?>
    </tbody>
</table>
