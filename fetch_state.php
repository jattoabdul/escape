<?php  
 	include 'settings.php';
 $output = '';  
 $sql = "SELECT * FROM tbl_state where country_id = '".$_POST["countryId"]."' ORDER BY state_name";  
 $result = mysql_query($sql);  
 $output = '<option value="">Select a State</option>';  
 while($row = mysql_fetch_array($result))  
 {  
      $output .= '<option value="'.$row["state_id"].'">'.$row["state_name"].'</option>';  
 }  
 echo $output;  
 ?>  