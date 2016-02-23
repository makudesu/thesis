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
    <title>Portfolio | Corlate</title>
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

<form action="update.php" method="post" onsubmit="return validateForm()">
 <div class="container">
      <div class="col-md- personal-info">
        <h3>Personal Information</h3>
        <form class="form-horizontal" role="form">
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"maxlength="30" disabled autofocus  name="username" value="<?php echo $username ?>" disabled>
            </div>
		 <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password"maxlength="30"  name="password" value="<?php echo $password ?>" disabled>
            </div>
				 <div class="form-group">
            <label class="col-lg-3 control-label">Confirem Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password"maxlength="30"  name="conpassword" value="<?php echo $password ?>" disabled>
            </div>
			
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Year/Grade Level:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="level" class="form-control" name="level" value="<?php echo $level?>" disabled>
				<option><?php echo $level?></option>
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
				<select id="status" class="form-control" name="status" value="<?php echo $status?>" disabled>
				<option><?php echo $status?></option>
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
                <select id="year" class="form-control" name="year" value="<?php echo $year?>" disabled>
				<option><?php echo $year?></option>
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
              <input class="form-control" type="text" name="studentid" value="<?php echo $studentid ?>" disabled>
            </div>
		  
		<div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname" value="<?php echo $lastname?>" disabled>
            </div>
			
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="firstname" value="<?php echo $firstname ?>" disabled>
            </div>
          </div>
         
		<div class="form-group">
            <label class="col-lg-3 control-label">Middle name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="middlename" value="<?php echo $middlename ?>" disabled>
            </div>
          </div>
		  
         <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="gender" class="form-control" name="gender" value="<?php echo $gender?>" disabled>
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
              <input class="form-control" type="text" name="bdate" value="<?php echo $bdate ?>" disabled>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="age" value="<?php echo $age ?>" disabled>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Birth Place:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="bplace" value="<?php echo $bplace?>" disabled>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Religion:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="religion" value="<?php echo $religion ?>" disabled>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Present Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="presentadd" value="<?php echo $presentadd ?>" disabled>
            </div>
          </div>

		    <div class="form-group">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="email" value="<?php echo $email ?>" disabled>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-lg-3 control-label">Guardian:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="guardian" value="<?php echo $guardian ?>" disabled>
            </div>
          </div>
		  
          <div class="form-group">
            <label class="col-lg-3 control-label">Relationship:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="relationship" value="<?php echo $relationship ?>" disabled>
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Incase of Emergency:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="emergency" value="<?php echo $emergency ?>" disabled > 
            </div>
          </div>
		
		<div class="form-group">
            <label class="col-md-3 control-label">Relationship:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="erelationship" value="<?php echo $erelationship?>" disabled>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Address:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="eaddress" value="<?php echo $eaddress ?>"disabled>
            </div>
          </div>
              
			  <div class="form-group">
            <label class="col-md-3 control-label">Contact No.:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="cp" value="<?php echo $cp ?>" disabled>
            </div>
          </div>
		  
		 
		  
		   
	<div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
        <center>
			  </center>
          </div>
        </form>

    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
