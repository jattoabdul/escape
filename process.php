<?php
  $query = "INSERT INTO users(firstName,email,tokenCode,lastName,mobileNumber,country_id,state_id,tellerCode) VALUES('$fname','$email','$token','$lname','$mobile','$country','$state','$teller')";
  $res = mysql_query($query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "successfully registered, you may login now";
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later..."; 
  } 
?>
            