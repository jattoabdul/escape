<?php
        include 'magic_quotes.php';
         ob_start();
        session_start();
        if( isset($_SESSION['user'])!="" ){
         header("Location: home.php");
        }
    $link = mysqli_connect("localhost", "mokeam", "mokeam2009", "support");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    else{
        // echo "Connected successfully";
    }
    
    if(isset($_POST['register'])){

        $fname = stripslashes($_POST['fname']);
         $lname = stripslashes($_POST['lname']);
         $email = stripslashes($_POST['email']);
         $token = stripslashes($_POST['token']);
         $mobile = stripslashes($_POST['mobile']);
         $country = stripslashes($_POST['country']);
         $state = stripslashes($_POST['state']);
         $teller = stripslashes($_POST['teller']);
         
    // Escape user inputs for security

        $fname = mysqli_real_escape_string($link, $fname);

        $lname = mysqli_real_escape_string($link, $lname);

        $email = mysqli_real_escape_string($link, $email );

        $token = mysqli_real_escape_string($link, $token);

        $mobile = mysqli_real_escape_string($link, $mobile);

        $country = mysqli_real_escape_string($link, $country);

        $state = mysqli_real_escape_string($link, $state);

        $teller = mysqli_real_escape_string($link, $teller);

    // attempt insert query execution

$query = "SELECT COUNT(*) AS num FROM token WHERE code='$token'";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);

  if($row['num']>=1){


        // $sql = "INSERT INTO users (firstName,email,tokenCode,lastName,mobileNumber,country_id,state_id,tellerCode) VALUES ('$fname', '$email', '$token','$lname','$mobile','$country','$state','$teller')";

        // if(mysqli_query($link, $sql)){

        //     $errTyp = "success";
        //     $errMSG = "successfully registered, you may login now";

        // } else{
        //     $errTyp = "warning";
        //     $errMSG = "Something went wrong, try again later..."; 
        // }
    echo "Yes";
         
    }
    else{
      $errTyp = "warning";
      $errMSG = "Invalid Token ...";
    } // close connection
        mysqli_close($link);
     }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Support</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script> 
<script type="text/javascript" src="validation_reg.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('header.html');?>
<div class="container">
 <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form method="post" id="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <center><h2>Registration Form</h2></center>
        <hr>
        <div class="row">
        <?php
            include_once 'settings.php';
             if ( isset($errMSG) ) {
              
              ?>
              <div class="form-group">
                       <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
              <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                          </div>
                       </div>
                          <?php
             }
             ?>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="fname"></label>
                    <input type="text" name="fname" class="form-control input-lg" placeholder="First Name" tabindex="1" required/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                <label for="lname"></label>
                    <input type="text" name="lname" class="form-control input-lg" placeholder="Last Name" tabindex="2" required/>
                </div>
            </div>
        </div>
            <div class="form-group">
            <label for="email"></label>
             <input type="text" name="email" class="form-control input-lg" tabindex="3" placeholder="Email" required/>
            </div>
            
            <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label for="token"></label>
                     <input type="text" name="token" class="form-control input-lg" tabindex="4" placeholder="Token Code" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label for="mobile"></label>
                     <input type="text" name="mobile" class="form-control input-lg" tabindex="5" placeholder="Mobile Number" required/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                 <?php
                     function load_country()  
                     {  
                          $output = '';  
                          $sql = "SELECT * FROM tbl_country ORDER BY country_name";  
                          $result = mysql_query($sql);  
                          while($row = mysql_fetch_array($result))  
                          {  
                               $output .= '<option value="'.$row["country_id"].'">'.$row["country_name"].'</option>';  
                          }  
                          return $output;  
                     }    
                 ?>
                 <label for="country"></label>
                 <select name="country" id="country" class="form-control input-lg" required>  
                    <option value="">Select a Country</option>  
                    <?php echo load_country(); ?>  
               </select>
               
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label for="state"></label>
                        <select name="state" id="state" class="form-control input-lg" required>  
                            <option value="">Select a State</option>  
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label for="teller"></label>
                     <input type="text" name="teller" class="form-control input-lg" tabindex="8" placeholder="Teller Code" required/>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-4 col-sm-3 col-md-3">
                <div class="container">
                <label for="agree"></label>
                  <span><input type="checkbox" name="agree" id="agree" class="btn" required>I Agree </span>
                </div>
              </div>
            </div><br/>
            <div class="row">
                <div class="col-xs-8 col-sm-9 col-md-9">
                 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#tnm">Terms and Conditions</a> set out by this site, including our Cookie Use.
              </div>
            </div>
        <hr/>
        <div class="row">
          <div class="col-xs-12 col-md-6"><input type="submit" name="register" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="9"></div>
          <div class="col-xs-12 col-md-6"><a href="support.php" class="btn btn-success btn-block btn-lg">Login</a></div>
        </div>
    </form>
    </div> 
</div>
</div>
<?php include 'footer.php';?>

  <script>  
 $(document).ready(function(){  
      $('#country').change(function(){  
           var country_id = $(this).val();  
           $.ajax({  
                url:"fetch_state.php",  
                method:"POST",  
                data:{countryId:country_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     $('#state').html(data);  
                }  
           });  
      });  
 });  
    
 </script>  

</body>
</html>