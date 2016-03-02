<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg" />  

<!DOCTYPE html>
<html>
    <head>
        <title>Secured Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
	
    
    <body>
    
        <header id="head" >
      <h2><strong><a href="localhost/thesis/web/admin/mainhome.html"></a></strong></h2>
        	<p><a href="register.php"><span id="register">Register</span></a></p>
        </header>
        
        <div id="main-wrapper">
        	<div id="login-wrapper">
            	<form method="post" action="">
                	<ul>
                    	<li>
                        	<label for="usn">Username : </label>
                        	<input type="text" maxlength="30" required autofocus name="username" />
                    	</li>
                    
                    	<li>
                        	<label for="passwd">Password : </label>
                        	<input type="password" maxlength="30" required name="password" />
                    	</li>
                    	<li class="buttons">
                        	<input type="button" name="login" value="Log me in" onclick="location='index.html'" />
                            <input type="button" name="register" value="Register" onclick="location.href='register.php'" />
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
	
	if( $usr->userLogin() ) {
		//echo "Welcome";	
		header("location:/thesis/web/admin/index.html");	
	} else {
		echo "Incorrect Username/Password";	
	}
}
?>
