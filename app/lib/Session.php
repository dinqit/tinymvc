<?php

class Session{
	
	protected static $table_name = 'sessions';
	public $user_id;
	public $logged_in;
	
	// starting the session
	public function __construct(){
		session_start();
		$this->check_logged_in();
	}
	
	/**
	* checks to see if a user is user_id already is set
	*/
	public function is_logged_in(){
		return isset($_SESSION['user_id']) ? true : false;
	}
	
	/**
	* checks to see if session is already set
	*/
	public function check_logged_in(){
		if($this->is_logged_in()){
			$this->user_id = $_SESSION['user_id'];
			$this->logged_in = true;
		}else{
			unset($this->user_id);
			$this->logged_in = false;
		}
	}
	
	/**
	* log user in
	*/
	public function log_in($username, $password){
		global $db;	
		//The login query
		$sql  = "SELECT id FROM users WHERE firstName = ? AND password = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$username,$password);
		//trying to execute this query
		$bool= FALSE;
		if($stmt->execute()){
			$stmt->bind_result($user_id);
			$stmt->fetch();
			//doing something with the result
			//$_SESSION['msg']="SUCCES";
			if($user_id){
				$this->check_logged_in();
				//$this->user_id = $user_id;
				$_SESSION['user_id']=$user_id;
				$bool= TRUE;
			}else{
				//if execution fails do something else
				$_SESSION['msg']="Gebruikersnaam of Wachtwoord is verkeerd . Probeer het nog eens!";	
				//echo '<p class="error">Gebruikersnaam of Wachtwoord is verkeerd<br>Probeer het nog eens.</p>';
				$bool = FALSE;
			}			
		}
		//closing the statement
		$stmt->close();
		return $bool;
	}
	
	/**
	* log user out
	*/
	public function log_out(){
		unset($_SESSION['user_id']);
		session_destroy();
	}
	
	public function write_session_to_db(){
		//check if exists
		if(!self::check_uid()){
			self::insert_uid();
		}else{
			self::update_uid();
		}
	}
	
	/** 
	 * Checks if user_id exists in session table 
	 */
	static public function check_uid(){
		global $db;
		//$this->check_logged_in();
		$sql = "SELECT EXISTS(SELECT 1 FROM sessions WHERE user_id LIKE '".$_SESSION['user_id']."'
LIMIT 1)as exist";
		$result = $db->query($sql) ;
		$row = $result->fetch_assoc();
		return  $row['exist'] ==1 ? true :false;
	}
	
	/** 
	 * Inserts the uid in sessions table 
	 */
	static private function insert_uid(){
		global $db;
		$sql = "INSERT INTO ".static::$table_name."(user_id,count,last_login) VALUES('".$_SESSION['user_id']."',1,NOW())";
		$result = $db->query($sql) || die($db->error);
		if($db->affected_rows==1){
			//echo 'succesfully inserted';
			$_SESSION['msg']="Succesfull inserted";
			
		}else{
			//echo "Not inserted";
			$_SESSION['msg']="Not inserted";	
		}	
	}
	
	/** 
	 * Updates session table count factor 
	 */
	static private function update_uid(){
		global $db;
		if(self::check_uid()){
			$sql = "UPDATE sessions SET count = count+1, last_login = now() WHERE user_id = '".$_SESSION['user_id']."'";
			$result = $db->query($sql) || die($db->error);
			if($db->affected_rows==1){
				//echo 'succesfully updated';
				$_SESSION['msg']="Succesfully updated";
			}else{
				//echo "Not updated";
				$_SESSION['msg']="Not updated";	
			}	
		}
		
	}
	
	static function show_msg(){
		//echo "<p>";
		self::write_session_to_db();
		//echo "</p>";
	}
	
	public function display_message(){
		
		if(isset($_SESSION['msg'])){
			echo "<p class='message'>{$_SESSION['msg']}</p>";
		}
	}
	public function reset_message(){
		unset($_SESSION['msg']);
	}
}


// starting the session
$session =  new Session;