<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>BNHS</title>
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
         
            <!-- main navigation container start -->
            <section id="nav-container">

                <!-- main navigation start  -->
           <nav id="nav">
                    <ul>
                              <li class="active"><a href="index.html">Home</a></li>
                          
                                <li> <a href="viewprofile.php">View Student Profile</a></li>
                      
                    
					
                                <li> <a href="assessment.php">Print Assessment</a></li>
                        

		
                                <li> <a href="mainhome.html">Logout</a></li>
                        
                     
</ul>
</nav>
            </section><!-- main navigation container end -->

        </header><!-- header end -->
    </section><!-- header wrapper end -->

    
    <!-- content wrapper start -->
    <section id="content-wrapper">

<div class="container">
<center><h2><strong>FIll up the Assessment</strong></h2></center>
<br><br>
<form name="myform" action="oldstudents.php" method="get" onsubmit="return validateForm()">

&nbsp;&nbsp;&nbsp;&nbsp;Student  ID: &nbsp;<input type="text" name="studentid" class="ed" id="brnu" />
Name:&nbsp;<input type="text" name="name" class="ed" id="brnu" />
Year Level:&nbsp;<input type="text" name="level" class="ed" id="brnu" />

</form>
		<center><h2><strong>SUBJECTS</strong></h2></center>
      <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Subject</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
				   
				   
				   
                    $sql = "SELECT * FROM tblsubjects WHERE Level= 'Grade 10'";
				   
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
							echo '<td>'. $row['Subject'] . '</td>';
                            echo '</tr>';
                   }
				   
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
			
			<center><h2><strong>Assessment of Fees</strong></h2></center>
			
	<table style="width:80%">
	 <tr>
    <th>Description</th>
    <th></th> 
    <th>Amount</th>
  </tr>
	<tr>
    <td>Admission</td>
    <td></td> 
    <td>300</td>
  </tr>
  <tr>
    <td>Exam and Stationary</td>
    <td></td> 
    <td>100</td>
  </tr>
  <tr>
    <td>Games and Sports</td>
    <td></td> 
    <td>100</td>
  </tr>
  <tr>
    <td>Library</td>
    <td></td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Journals</td>
    <td></td> 
    <td>100</td>
  </tr>
  <tr>
    <td>Computer Fees</td>
    <td></td> 
    <td>1000</td>
  </tr>
<tr>
    <td> </td>
    <td> </td> 
    <td> </td>
  </tr> 
  <tr>
    <td> </td>
    <td> </td> 
    <td> </td>
  </tr> 
 <tr>
    <td><h2>Total Tuition Fee</h2></td>
    <td></td> 
    <td><h2>1650</h2></td>
  </tr>
 
</table>


        </div>
		<br>
		<br>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enrollment Officer Signature
		<br><br>
		<center>Student Signature</center>
		<br>
		<br>
		<FORM>
<center><INPUT TYPE="button" name="print" value="PRINT" onClick="window.print()"></center>
</FORM>

    </section><!-- content-wrapper end -->
<br>
<br>
<br>
<br>
    <!-- footer start -->
    <footer id="footer" class="clearfix">
       

        <!-- copyright start -->
        <section class="container_12 clearfix">
            <section class="copyright">
                <p>Copyright BNHS Enrollment System, Bambang Nueva Vizcaya. <span class="find-out-more"></span></p>
                <a class="to-top-link"><img src="img/to-top.png" class="to-top" alt="back to top"/></a>
            </section>
        </section><!-- copyright end -->
    </footer><!-- footer end -->

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
