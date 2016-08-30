<?php
 ob_start();
 session_start();
 require_once 'settings.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 
 if( isset($_POST['submit']) ) { 
  
  $email = $_POST['email'];
  $token = $_POST['tokenCode'];
  
  $email = strip_tags(trim($email));
  $upass = strip_tags(trim($upass));
  
  $res=mysql_query("SELECT userId, firstName,tokenCode FROM users WHERE email='$email'");
  
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); 
  
  if( $count == 1 && $row['tokenCode']==$token) {
   $_SESSION['user'] = $row['userId'];
   header("Location: home.php");
  } else {
   $errMSG = "Wrong Credentials, Try again...";
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Support</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
</head>
<body>
	<?php include('header.html');?>
  
  <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" action="" method="post" id="loginForm">
        <center><h2>Login</h2></center>
        <hr>
        <div class="row">
        <?php
         if ( isset($errMSG) ) {
          
          ?>
          <div class="form-group">
                   <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                      </div>
                   </div>
                      <?php
         }
         ?>
          <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="form-group">
               <input type="email" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="1" required><br/>
               <input type="text" name="tokenCode" class="form-control input-lg" placeholder="Token Code" tabindex="2" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
          <center><input type="submit" name="submit" class="btn btn-success btn-block btn-lg" value="Login"></center> <br/>
           <span> Not Registered? <a href="register.php">Register</a> </span>

          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</div>
<?php include 'footer.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#loginForm').validate();
  </script>
</body>
</html>