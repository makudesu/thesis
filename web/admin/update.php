<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['register'] ) ) ) { ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="prettyPhoto.css" rel="stylesheet">
    <link href="animate.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </head>
    
    <body>
        <header id="head" >
        	<p>User Account Creation</p>
        	<p><a href="register.php"><span id="register">Register</span></a></p>
        </header>
        
        <div id="main-wrapper">
        	<div id="register-wrapper">
            	<form method="post">
                	<ul>
                    	<li>
                        	<label for="usn">Username : </label>
                        	<input type="text" id="usn" maxlength="30" required autofocus name="username" />
                    	</li>
                    
                    	<li>
                        	<label for="passwd">Password : </label>
                        	<input type="password" id="passwd" maxlength="30" required name="password" />
                    	</li>
                        
                        <li>
                        	<label for="conpasswd">Confirm Password : </label>
                        	<input type="password" id="conpasswd" maxlength="30" required name="conpassword" />
                    	</li>  <div class="form-group">
            <label class="col-lg-3 control-label">Year/Grade Level:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="level" class="form-control" maxlength="100" name="level" required>
				<option></option>
                  <option>First Year</option>
                  <option>Second Year</option>
				  <option>Third Year</option>
                  <option>Fourth Year</option>
				  <option>Grade 7</option>
                  <option>Grade 8</option>
				  <option>Grade 9</option>
                  <option>Grade 10</option>
				  <option>Grade 11</option>
                  <option>Grade 12</option>
                </select>
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Enrollment Status:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="status" class="form-control" name="status" required>
				<option></option>
                  <option>New Student</option>
                  <option>Old Student</option>
				  <option>Transferee</option>
                </select>
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">School Year:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="schoolyear" class="form-control" name="schoolyear" required>
				<option></option>
                  <option>2010-2011</option>
                  <option>2011-2012</option>
				  <option>2012-2013</option>
				  <option>2013-2014</option>
				  <option>2014-2015</option>
				  <option>2015-2016</option>
                </select>
              </div>
            </div>
          </div>

		  <div class="form-group">
            <label class="col-lg-3 control-label">Student ID:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="studentid" required>
            </div>
		  
		<div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname" required>
            </div>
			
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="firstname" required>
            </div>
          </div>
         
		<div class="form-group">
            <label class="col-lg-3 control-label">Middle name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="middlename" required>
            </div>
          </div>
		  
         <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="gender" class="form-control" name="gender" required>
				<option></option>
                  <option>Female</option>
                  <option>Male</option>
                </select>
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Birth Date:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="bdate" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="age" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Birth Place:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="bplace" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Religion:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="religion" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Present Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="presentadd" required>
            </div>
          </div>

		    <div class="form-group">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="email" required>
            </div>
          </div>
		  
              
			  <div class="form-group">
            <label class="col-md-3 control-label">Contact No.:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="cp">
            </div>
          </div>
		  
		  
		      
                    	<li class="buttons">
                        	<input type="submit" name="register" value="Register" />
                            <input type="button" name="cancel" value="Cancel" onclick="location.href='index.php'" />
                    	</li>
                    
                	</ul>
            	</form>
            </div>
        </div>
    
    </body>
</html>

<?php 
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	
	if( $_POST['password'] == $_POST['conpassword'] ) {
		echo $usr->register($_POST);	
	} else {
		echo "Password and Confirm password not match";	
	}
}
?>