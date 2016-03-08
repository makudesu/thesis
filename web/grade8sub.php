<?php
require_once 'viewing_fucntion.php';
		$sql = "UPDATE tblprereg SET YearLevel='Grade 8', Status='Old Student'  WHERE username ='" . $uname . "';";
		// we have to tell the PDO that we are going to send values to the query
		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute();
		foreach ($rows as $row) {
		$yearlevel=$row['YearLevel'];		
		}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Home - BNHS</title>
    <meta name="description" content="Moderna Responsive HTML5 Template">
    <meta name="author" content="pixel-industry">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg" />  

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/960_12_col.css" media="screen" />
    <link rel="stylesheet" href="css/reset.css" media="screen" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="css/anythingslider.css">
    <link rel="stylesheet" title="activestyle" href="css/default-blue.css" media="screen" /> <!--default blue color style-->  

    <!--[if IE 7]>
<link rel="stylesheet" href="css/ie7.css" media="screen" />
<![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="css/ie8.css" media="screen" />
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css" media="screen" />
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,300,100,200' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- header wrapper start -->
    <section id="header-wrapper">

        <!-- header start -->
        <header id="header" class="clearfix">
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
                       
                               
                    
                                <li> <a href="mainhome.html">Logout</a></li>
            </ul>
			</nav>

            </section><!-- main navigation container end -->

        </header><!-- header end -->
    </section><!-- header wrapper end -->

	<!-- page-title start -->
        <section id="page-title">
            <center><h1>You are Successfully Enrolled</h1></center>
        </section><!-- page-title end -->

		<!-- content wrapper start -->
    <section id="content-wrapper">
	<div class="container">
<br>
<form name="myform" action="oldstudents.php" method="get" onsubmit="return validateForm()">

<div class="form-group">
Student  ID: &nbsp;<font color="black"><?php echo $studentid ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Name:&nbsp;<font color="black"><?php echo $lastname?> <?php echo $firstname?> <?php echo $middlename?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Grade: <font color="black"><?php echo $level?></font>
&nbsp;&nbsp;&nbsp;&nbsp;
            
            <div class="col-lg-8">
			
              <div class="ui-select">
			  
                
              </div>
            </div>
          </div>
    
    <!-- content wrapper start -->
    <section id="content-wrapper">


<div class="container">
		<br><br><center><h2><strong>SUBJECTS</strong></h2></center>
      <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <tr>  <td style="text-align:left"><b>Student</b></td>
					
					<td style="text-align:left"><b>&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp; 
					&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
					&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
					&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
					Teacher</b></td>
                    </tr>
                  
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
				   
				   
				   
                    $sql = "SELECT * FROM tblsubjects WHERE Level= 'Grade 8'";
				   
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
							echo '<td>'. $row['Subject'] . '</td>';
							echo '<td style="text-align:left">&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
							&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
							&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
							&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;'. $row['Teacher'] . '</td>';
							echo '</tr>';
                   }
				   
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
			
			<center><h2><strong>Assessment of Fees</strong></h2></center>
			
	<table style="width:80%">
	 <tr>
    <th style="text-align:left"><b>Description</b></th>
    <th></th> 
    <th style="text-align:right"><b>Amount</b></th>
  </tr>
	<tr>
    <td>Admission</td>
    <td></td> 
    <td style="text-align:right">P300.00</td>
  </tr>
  <tr>
    <td>Exam and Stationary</td>
    <td></td> 
    <td style="text-align:right">P100.00</td>
  </tr>
  <tr>
    <td>Games and Sports</td>
    <td></td> 
    <td style="text-align:right">P100.00</td>
  </tr>
  <tr>
    <td>Library</td>
    <td></td> 
    <td style="text-align:right">P50.00</td>
  </tr>
  <tr>
    <td>Journals</td>
    <td></td> 
    <td style="text-align:right">P100.00</td>
  </tr>
  <tr>
    <td>Computer Fees</td>
    <td></td> 
    <td style="text-align:right">P1,000.00</td>
    </tr>
 <tr>
    <td><h4><i>Total Tuition Fee</i></h4></td>
    <td></td> 
    <td style="text-align:right"><i><b>P1650.00</b></i></td>
  </tr>
 
</table>


        </div>
		<center>
		<br><br><br><br>
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
		<u>
			Guillermo Del Toro<br>
		</u>
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
			Registrar


    </section><!-- content-wrapper end -->
<br>
<br>
<br>
<br>
    

    <!-- js files -->
    <script  src="js/jquery-1.7.2.js"></script> <!-- jQuery 1.7.2 -->
    <script  src="js/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
    <script  src="js/socialstream.jquery.js"></script> <!-- Social Networks Feeds -->
    <script  src="js/jquery.easing.1.2.js"></script><!-- Anything Slider optional plugins -->
    <script  src="js/jquery.anythingslider.min.js"></script><!-- Anything Slider -->    
    <script  src="js/jquery.anythingslider.fx.min.js"></script><!-- Anything Slider optional FX extension -->   
    <script  src="js/jquery.carouFredSel-5.6.4-packed.js"></script><!-- CarouFredSel carousel plugin -->
    <script  src="js/portfolio.js"></script> <!-- portfolio custom options -->
    <script  src="js/include.js"></script> <!-- jQuery custom options -->
    <script  src="js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->

    <!-- end js files -->

    <script>
        $(function(){
            // slider animation options
            var sliderOption = {'.panel1 .slide-img-container'  : [ 'left', '1040px', '1000', 'easeOutCirc' ],
                '.panel1 h3'  : [ 'right', '640px', '500', 'easeInOutCirc' ],
                '.panel1 p'  : [ 'right', '640px', '1000', 'easeInOutCirc' ],
                '.panel1 a'  : [ 'right', '640px', '1200', 'easeInOutCirc' ],
                '.panel2 .slide-img-container'  : [ 'bottom', '1040px', '1000', 'easeOutCirc' ],
                '.panel2 h3'  : [ 'top', '640px', '500', 'easeInOutCirc' ],
                '.panel2 p'  : [ 'top', '640px', '1000', 'easeInOutCirc' ],
                '.panel2 a'  : [ 'top', '840px', '1200', 'easeInOutCirc' ],
                '.panel3 blockquote'  : [ 'right', '640px', '100', 'easeInOutCirc' ],
                '.panel3 p'  : [ 'right', '640px', '1500', 'easeInOutCirc' ]};
            
            // slider Fx options
            var fxOptions = {stopRepeat : true};
            
            $('#slides') // Using FX base effects 
            .anythingSlider({ 
                resizeContents      : true, 
                expand              : true,
                buildArrows         : true,  
                buildNavigation     : true,
                buildStartStop      : false,
                autoPlay            : false,
                delay: 5000,
                buildStartStop      : false,
                hashTags            : false
            }) 
            .anythingSliderFx(sliderOption, fxOptions); 
            //	Variable number of visible items with variable sizes
            $('.carousel-li').carouFredSel({
                items: 4,
                height: 161,
                prev: '.prev',
                next: '.next',
                auto: false,
                scroll: 1
            });

        });
        /* ]]> */
    </script>
</body>
</html>
