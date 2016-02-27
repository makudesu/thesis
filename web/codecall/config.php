<?php
    //set off all error for security purposes
	error_reporting(E_ALL);
	

	//define some contstant
    define( "DB_DSN", "mysql:host=db4free.net;dbname=codecalltut" );
    define( "DB_USERNAME", "bnhs" );
    define( "DB_PASSWORD", "123456" );
	define( "CLS_PATH", "class" );
	
	//include the classes
	include_once( CLS_PATH . "/user.php" );
	

?>
