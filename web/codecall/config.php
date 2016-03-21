<?php
    //set off all error for security purposes
	error_reporting(E_ALL);
	

	//define some contstant
    define( "DB_DSN", "mysql:host=sql6.freesqldatabase.com;dbname=sql6111644" );
    define( "DB_USERNAME", "sql6111644" );
    define( "DB_PASSWORD", "iGMQd39TBT" );
	define( "CLS_PATH", "class" );
	
	//include the classes
	include_once( CLS_PATH . "/user.php" );
	

?>
