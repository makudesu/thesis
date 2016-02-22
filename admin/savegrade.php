<?php
$con=mysqli_connect("localhost","root","","codecalltut");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$studentid = mysqli_real_escape_string($con, $_POST['studentid']);
$level = mysqli_real_escape_string($con, $_POST['level']);
$schoolyear = mysqli_real_escape_string($con, $_POST['year']);
$filipino = mysqli_real_escape_string($con, $_POST['filipino']);
$english = mysqli_real_escape_string($con, $_POST['english']);
$math = mysqli_real_escape_string($con, $_POST['math']);
$science = mysqli_real_escape_string($con, $_POST['science']);
$tle = mysqli_real_escape_string($con, $_POST['tle']);
$history = mysqli_real_escape_string($con, $_POST['history']);
$mapeh = mysqli_real_escape_string($con, $_POST['mapeh']);

$sql="INSERT INTO tblgrades (Student_ID, Level,SchoolYear, Filipino,English,Mathematics,Science,TLE,History,MAPEH)
					VALUES ('$studentid','$level','$schoolyear', '$filipino','$english','$math','$science','$tle','$history','$mapeh')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Successfully Recorded ";
	header("location:addgrade.php");	

mysqli_close($con);
?>