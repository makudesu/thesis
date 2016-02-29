<?php 
	include_once("config.php");
	session_start();
	//if (isset( $SESSION[])
	?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Secured Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
    
        <header id="head" >
        	<h1><a href="localhost/stretched/admin/index.html"></a></h1>
        	
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
                        	<input type="submit" name="login" value="Log me in" />
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
	$_SESSION['uname'] = $_POST['username'];
		//echo "Welcome";	
		header("location:/thesis/web/index.html");	
	} else {
		echo "Incorrect Username/Password";	
	}
}
?>
