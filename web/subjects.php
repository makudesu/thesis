<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Home - Moderna</title>
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
         

                <!-- main navigation start  -->
           <nav id="nav">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
             
                                <li> <a href="viewprofile.php">View Profile</a></li>
                      
                                <li> <a href="searcheditstudent.php">Edit Profile</a></li>
       
                                <li> <a href="mainhome.html">Logout</a></li>
            </ul>
			</nav>
            </section><!-- main navigation container end -->

        </header><!-- header end -->
    </section><!-- header wrapper end -->

    
    <!-- content wrapper start -->
    <section id="content-wrapper">

<div class="container">
<center><h2><strong><u>Choose Grade Level</u></strong></h2></center>
<br><br>
<form name="myform" action="oldstudents.php" method="get" onsubmit="return validateForm()">
<center>
<?php
require_once 'viewing_fucntion.php';
		$sql = "SELECT YearLevel FROM tblprereg WHERE username = '" . $uname . "';";

		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute();
foreach ($rows as $row) {
		$yearlevel=$row['YearLevel'];
		if ($yearlevel == 'Grade 7') {
?>	
grade 7

<?php		
		}
		elseif ($yearlevel == 'Grade 8'){
		
	

?>
grade 8

<?php		
		}
		elseif ($yearlevel == 'Grade 9'){
		
	

?>
grade 9

<?php		
		}
		elseif ($yearlevel == 'Grade 10'){
		
	

?>
grade 10

<?php		
		}
		elseif ($yearlevel == 'Grade 11'){
		
	

?>
grade 11

<?php		
		}
		elseif ($yearlevel == 'Grade 12'){
		
	

?>
grade 12

<?php		
		}
		else{
		}
	

?>
	
<?php
}
?>
<h2><strong><a href="grade7sub.php">Grade 7</a></strong></h2>

<h2><strong><a href="grade8sub.php">Grade 8</a></strong></h2>

<h2><strong><a href="grade9sub.php">Grade 9 </a></strong></h2>

<h2><strong><a href="grade10sub.php">Grade 10</a></strong></h2>

<h2><strong><a href="grade11sub.php">Grade 11</a></strong></h2>

<h2><strong><a href="grade12sub.php">Grade 12</a></strong></h2>
</center>
</form>
		
        </div>

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