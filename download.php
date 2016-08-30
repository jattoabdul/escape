<?php
	ob_start();
	 session_start();
	 require_once 'settings.php';
	 
	 if( !isset($_SESSION['user']) ) {
	  header("Location: support.php");
	  exit;
	 }
	 else{
	 	// select loggedin users detail
	 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	 $userRow=mysql_fetch_array($res);
	 	if(isset($_GET['file'])){
			$file = $_GET['file'];
			if(file_exists($file) && is_readable($file) &&preg_match('/\.pdf$/', $file)){
				header('Content-Type: application/pdf');
				header('Content-Disposition: attachment; filename=\"$file\"');
				readfile($file);
			}
		}
		else{
			header("HTTP/1.0 404 Not Found");
			echo "<h1> Erro 404: File Not Found: <br/> <em> $file </em></h1>";
		}
	 }
	
?>