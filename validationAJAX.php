<?php
// db connection
$connection = mysqli_connect('localhost', 'mokeam', 'mokeam2009','support') or die(mysql_error());
// function to verify the existence of usernames
function isset_token($token){
	global $connection;
	$token = trim($token);
	$query = "SELECT COUNT(*) AS num FROM token WHERE code='" .mysqli_real_escape_string($connection,$token). "'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);
	if($row['num']>=1){
		return TRUE; // true if token exists
		}
	else{
		return FALSE;
		}
	}

//function to verify the existence of the email
function isset_email($email){
	global $connection;
	$email = trim($email);
	$query = "SELECT COUNT(*) AS num FROM users WHERE email='" .mysqli_real_escape_string($connection,$email). "'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);
	if($row['num']>=1){
		return TRUE; // true if user exists
		}
	else{
		return FALSE;
		}
	}

/*
We complete AJAX request
*/
if(isset($_POST['token'])){
	if(!isset_token($_POST['token'])){
		echo 'true';
		}
	else{
		echo 'false';
		}
	}
else if(isset($_POST['email'])){
	if(!isset_email($_POST['email'])){
		echo 'true';
		}
	else{
		echo 'false';
		}
	}
?>