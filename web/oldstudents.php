<?php
require_once 'viewing_fucntion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BNHS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/jpg/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/jpg/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/jpg/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/jpg/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/jpg/apple-touch-icon-57-precomposed.png">
	  <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg" />  

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/960_12_col.css" media="screen" />
    <link rel="stylesheet" href="css/reset.css" media="screen" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="css/anythingslider.css">
    <link rel="stylesheet" title="activestyle" href="css/default-blue.css" media="screen" /> <!--default blue color style-->  
</head><!--/head-->
<body>

<!-- header start -->
        <header id="header" class="clearfix"> 
 
     <!-- header wrapper start -->
    <section id="header-wrapper">
        
			<!-- logo start -->
            <section id="logo">
                <a href="index.html">
                   
                </a>
            </section><!-- logo end -->
			
			<!-- main navigation container start -->
            <section id="nav-container">
			
                <!-- main navigation start  -->
                <nav id="nav">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                            
                                <li> <a href="viewing.php">View Profile</a></li>
                       
                                <li> <a href="oldstudents.php">Enroll & Edit Profile</a></li>
                    
                                <li> <a href="mainhome.html">Logout</a></li>
                   </ul>
				   </nav>

            </section><!-- main navigation container end -->

        </header><!-- header end -->
    </section><!-- header wrapper end -->

<form action="subjects.php" method="post" onsubmit="return validateForm()">

 <div class="container">
    
<br><br>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
         Please Fillup the Form below Before Updating Account...Thank You
        </div>
        <h3>Personal Information</h3>
        

		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"maxlength="30" required autofocus  name="username" value="<?php echo $username ?>" required>
            </div>
		 <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password"maxlength="30"  name="password" value="<?php echo $password ?>" required>
            </div>
				 <div class="form-group">
            <label class="col-lg-3 control-label">Confirm Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password"maxlength="30"  name="conpassword" value="<?php echo $password ?>" required>
            </div>
		
		   <div class="form-group">
            <label class="col-lg-3 control-label">School Year:</label>
            <div class="col-lg-8">
			<div class="ui-select">
                <select id="status" class="form-control" name="status" required>
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
              <input class="form-control" type="text" name="studentid" value="<?php echo $studentid ?>">
            </div>
		  
		<div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname" value="<?php echo $lastname?>" required>
            </div>
			
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="firstname" value="<?php echo $firstname ?>" required>
            </div>
          </div>
         
		<div class="form-group">
            <label class="col-lg-3 control-label">Middle name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="middlename" value="<?php echo $middlename ?>" required>
            </div>
          </div>
		  
         <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="gender" class="form-control" name="gender" value="<?php echo $gender?>" required>
				<option><?php echo $gender?></option>
                  <option>Female</option>
                  <option>Male</option>
                </select>
              </div>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Birth Date:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="bdate" value="<?php echo $bdate ?>" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="age" value="<?php echo $age ?>" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Birth Place:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="bplace" value="<?php echo $bplace?>" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Religion:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="religion" value="<?php echo $religion ?>" required>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Present Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="presentadd" value="<?php echo $presentadd ?>" required>
            </div>
          </div>

		    <div class="form-group">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="email" value="<?php echo $email ?>" required>
            </div>
          </div>
		  
			  <div class="form-group">
            <label class="col-md-3 control-label">Contact No.:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="cp" value="<?php echo $cp ?>"> <br>
			  
			 &nbsp;&nbsp; <input type="submit" name="Submit" value="NEXT" id="button1" /> 
			</div>
          </div>
		  

	
			
		
    <br><br><br><br>
	</form>
	
	
	<?php
		//$SchoolYear = 'hello';
		//$sql = "UPDATE tblprereg SET SchoolYear='". $SchoolYear ."' WHERE username ='" . $uname . "';";
		// we have to tell the PDO that we are going to send values to the query
		//$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		//$results = $stmt->execute();
		//foreach ($rows as $row) {
		//$yearlevel=$row['YearLevel'];		
		//}
?>

    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
