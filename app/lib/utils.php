<?php
/**
 * A set of functions to enhaunce workflow
*/
 
	function create_dir($path,$permission = 0755){
		mkdir($path,$permission);
	}
	
	function strip_zeros_from_date( $marked_string="" ) {
  		// first remove the marked zeros
	  $no_zeros = str_replace('*0', '', $marked_string);
	  // then remove any remaining marks
	  $cleaned_string = str_replace('*', '', $no_zeros);
	  return $cleaned_string;
	}

	function redirect_to( $location = NULL ) {
	  if ($location != NULL) {
	    header("Location: {$location}");
	    exit;
	  }
	}
	
	function get_webmin(){
		global $database;
		$sql = "SELECT * FROM webmin WHERE from_name = 'Webmaster'";
		$result = $database->query($sql);
		$object = $database->fetch_object($result);
		return $object;
	}
	
	function get_date(){
		$date = strtotime("now");
		$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $date);
		return $mysql_datetime;
	}
	
	function parse_params($params){
		if(isset($_POST)){
		$params = array_merge($params,$_POST);
		}
		if(isset($_GET)){
			$params = array_merge($params,$_GET);
		}
		return $params;
	}
	
	function set_mysql_date($date){
		$date= strtotime($date);
		return strftime("%a %d %B %Y %H:%m:%S",$date);
	}
	
	function output_message($message="") {
	  if (!empty($message)) { 
		return "<p class=\"message\">{$message}</p>";
	  } else {
		return "";
	  }
	}
	
	/** Returns the date in human readable tekst*/
	function datetime_to_text($datetime="") {
	  $unixdatetime = strtotime($datetime);
	  return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
	}
	
	function log_action($action, $message="") {
		$logfile = PUBLIC_.'logs'.DS.'log.txt';
		$new = file_exists($logfile) ? false : true;
	  if($handle = fopen($logfile, 'a')) { // append
	    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
			$content = "{$timestamp} | {$action}: {$message}\n";
	    fwrite($handle, $content);
	    fclose($handle);
	    if($new) { chmod($logfile, 0755); }
	  } else {
	    echo "Could not open log file for writing.";
	  }
	}
?>
