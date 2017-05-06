<?php
$server_name = 'localhost';
$server_user = 'root';
$server_password = '';
$default_table = 'app';

$db = new mysqli($server_name,$server_user,$server_password,$default_table);

if($db->connect_errno){
	die('Sorry, we could\'nt connect');
}/*else{
	echo "Succesfully connected";
}*/

