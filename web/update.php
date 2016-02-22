<?php
$con=mysqli_connect("localhost","root","","codecalltut");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$username =$_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
//$section = mysqli_real_escape_string($con, $_POST['section']);
$status = $_POST['status'];
$year =$_POST['year'];
$studentid = $_POST['studentid'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$gender =  $_POST['gender'];

$bdate = $_POST['bdate'];

$age =$_POST['age'];
$bplace = $_POST['bplace'];
$religion =$_POST['religion'];
$email = $_POST['email'];
$presentadd = $_POST['presentadd'];
$guardian = $_POST['guardian'];
$relationship = $_POST['relationship'];
$emergency = $_POST['emergency'];
$erelationship =  $_POST['erelationship'];
$eaddress =$_POST['eaddress'];
$cp = $_POST['cp'];



$sql=("UPDATE tblprereg SET username= 'username', password= 'password', YearLevel= 'level',Status= 'status', SchoolYear= 'schoolyear', Student_ID= 'studentid',Lastname= 'lastname', Firstname= 'firstname', Middlename= 'middlename', Gender=  'gender', BirthDate= 'bdate',Age= 'age', BirthPlace= 'bplace', Religion= 'religion', Email= 'email', Address= 'presentadd',Guardian= 'guardian', Relationship= 'relationship', Emergency= 'emergency', ERelationship=  'erelationship', EAddress= 'eaddress', CPnumber= 'cp' WHERE Student_ID= '".$studentid."' ");



//if (!mysqli_query($con,$sql)) {
  //die('Error: ' . mysqli_error($con));
//}
echo "Successfully Recorded ";
	header("location:services.html");	

mysqli_close($con);
?>