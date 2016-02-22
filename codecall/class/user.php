<?php

 class Users {
	 public $username = null;
	 public $password = null;
	 public $salt = "Zo4rU5Z1YyKJAASY0PT6EUg7BBYdlEhPaNLuxAwU8lqu1ElzHv0Ri7EM6irpx5w";
	 
	 public $level=null;
	 public $status = null;
	 public $schoolyear = null;
	 public $studentid = null;
	 public $lastname = null;
	 public $firstname = null;
	 public $middlename = null;
	 public $gender = null;
	 public $bdate = null;
	 public $age = null;
	 public $bplace = null;
	 public $religion=null;
	 public $email=null;
	 public $presentadd=null;
	 public $guardian = null;
	 public $relationship = null;
	 public $emergency = null;
	 public $erelationship = null;
	 public $eaddress=null;
	 public $cp=null;

	 
	 public function __construct( $data = array() ) {
		 if( isset( $data['username'] ) ) $this->username = stripslashes( strip_tags( $data['username'] ) );
		 if( isset( $data['password'] ) ) $this->password = stripslashes( strip_tags( $data['password'] ) );
		 if( isset( $data['level'] ) ) $this->level = stripslashes( strip_tags( $data['level'] ) );
		 if( isset( $data['status'] ) ) $this->status = stripslashes( strip_tags( $data['status'] ) );
		 if( isset( $data['schoolyear'] ) ) $this->schoolyear = stripslashes( strip_tags( $data['schoolyear'] ) );
		 if( isset( $data['studentid'] ) ) $this->studentid = stripslashes( strip_tags( $data['studentid'] ) );
		 if( isset( $data['lastname'] ) ) $this->lastname = stripslashes( strip_tags( $data['lastname'] ) );
		 if( isset( $data['firstname'] ) ) $this->firstname = stripslashes( strip_tags( $data['firstname'] ) );
		 if( isset( $data['middlename'] ) ) $this->middlename = stripslashes( strip_tags( $data['middlename'] ) );
		 if( isset( $data['gender'] ) ) $this->gender = stripslashes( strip_tags( $data['gender'] ) );
		 if( isset( $data['bdate'] ) ) $this->bdate = stripslashes( strip_tags( $data['bdate'] ) );
		 if( isset( $data['age'] ) ) $this->age = stripslashes( strip_tags( $data['age'] ) );
		 if( isset( $data['bplace'] ) ) $this->bplace = stripslashes( strip_tags( $data['bplace'] ) );
		 if( isset( $data['religion'] ) ) $this->religion = stripslashes( strip_tags( $data['religion'] ) );
		 if( isset( $data['email'] ) ) $this->email = stripslashes( strip_tags( $data['email'] ) );
		 if( isset( $data['presentadd'] ) ) $this->presentadd = stripslashes( strip_tags( $data['presentadd'] ) );
		  if( isset( $data['guardian'] ) ) $this->guardian = stripslashes( strip_tags( $data['guardian'] ) );
		 if( isset( $data['relationship'] ) ) $this->relationship = stripslashes( strip_tags( $data['relationship'] ) );
		 if( isset( $data['emergency'] ) ) $this->emergency = stripslashes( strip_tags( $data['emergency'] ) );
		 if( isset( $data['erelationship'] ) ) $this->erelationship = stripslashes( strip_tags( $data['erelationship'] ) );
		 if( isset( $data['eaddress'] ) ) $this->eaddress = stripslashes( strip_tags( $data['eaddress'] ) );
		 if( isset( $data['cp'] ) ) $this->cp = stripslashes( strip_tags( $data['cp'] ) );
	
	 }
	 
	 public function storeFormValues( $params ) {
		//store the parameters
		$this->__construct( $params ); 
	 }
	 
	 public function userLogin() {
		 $success = false;
		 try{
			$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
			$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$sql = "SELECT * FROM tblprereg WHERE username = :username AND password = :password LIMIT 1";
			
			$stmt = $con->prepare( $sql );
			$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
			$stmt->bindValue( "password", hash("sha256", $this->password . $this->salt), PDO::PARAM_STR );
			
			$stmt->execute();
			
			$valid = $stmt->fetchColumn();
			
			if( $valid ) {
				$success = true;
			}
			
			$con = null;
			return $success;
		 }catch (PDOException $e) {
			 echo $e->getMessage();
			 return $success;
		 }
	 }
	 
	 public function register() {
		$correct = false;
			try {
				$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
				$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$sql="INSERT INTO tblprereg (username,password,YearLevel,Status, SchoolYear, Student_ID,Lastname, Firstname, Middlename, Gender, BirthDate,Age, BirthPlace, Religion, Email, Address,Guardian, Relationship, Emergency, ERelationship, EAddress, CPnumber) VALUES (:username, :password, :level ,:status,:schoolyear, :studentid, :lastname, :firstname, :middlename, :gender, :bdate, :age, :bplace, :religion, :email, :presentadd, :guardian, :relationship, :emergency, :erelationship, :eaddress, :cp)";
				
				$stmt = $con->prepare( $sql );
				$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
				$stmt->bindValue( "password", hash("sha256", $this->password . $this->salt), PDO::PARAM_STR );
				$stmt->bindValue( "level", $this->level, PDO::PARAM_STR );
				$stmt->bindValue( "status", $this->status, PDO::PARAM_STR );
				$stmt->bindValue( "schoolyear", $this->schoolyear, PDO::PARAM_STR );
				$stmt->bindValue( "studentid", $this->studentid, PDO::PARAM_STR );
				$stmt->bindValue( "lastname", $this->lastname, PDO::PARAM_STR );
				$stmt->bindValue( "firstname", $this->firstname, PDO::PARAM_STR );
				$stmt->bindValue( "middlename", $this->middlename, PDO::PARAM_STR );
				$stmt->bindValue( "gender", $this->gender, PDO::PARAM_STR );
				$stmt->bindValue( "bdate", $this->bdate, PDO::PARAM_STR );
				$stmt->bindValue( "age", $this->age, PDO::PARAM_STR );
				$stmt->bindValue( "bplace", $this->bplace, PDO::PARAM_STR );
				$stmt->bindValue( "religion", $this->religion, PDO::PARAM_STR );
				$stmt->bindValue( "email", $this->email, PDO::PARAM_STR );
				$stmt->bindValue( "presentadd", $this->presentadd, PDO::PARAM_STR );
				$stmt->bindValue( "guardian", $this->guardian, PDO::PARAM_STR );
				$stmt->bindValue( "relationship", $this->relationship, PDO::PARAM_STR );
				$stmt->bindValue( "emergency", $this->emergency, PDO::PARAM_STR );
				$stmt->bindValue( "erelationship", $this->erelationship, PDO::PARAM_STR );
				$stmt->bindValue( "eaddress", $this->eaddress, PDO::PARAM_STR );
				$stmt->bindValue( "cp", $this->cp, PDO::PARAM_STR );
				
				$stmt->execute();
				echo "Successfully Recorded ";
				header("location:/stretched/index.html");	
			}catch( PDOException $e ) {
				return $e->getMessage();
			}
	 }
	 
 }
 
?>