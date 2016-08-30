<?php
 ob_start();
 session_start();
 require_once 'settings.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: support.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
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
   <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
	<?php include('header.html')?>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-3">
				<div>
					<h2>Welcome <?php echo $userRow['firstName']; ?> </h2>
					<li style="list-style:none;"><a>My Profile</a>|<a href="logout.php?logout">Log out</a></li>
					
				</div>

	            <div>
	            	<hr/>
	            	<div class="panel panel-default" style="background-color:rgb(0, 200, 215);">
					  <div class="panel-body">
					    Find Solutions
					  </div>
					</div>
					<form>
					<input type="text" class="form-control"/><br/>
					<button class="btn btn-default">Go!</button>
					</form>
	            </div>
	            <hr/>
	            <div>
					<div class="panel panel-default" style="background-color:rgb(0, 200, 215);">
					  <div class="panel-body">
					    Downloads
					  </div>
					</div>
					<li style="list-style:none;"><a href="download.php?file=git_tutorial.pdf">Downlod Git Tutorial</a></li>
					<li style="list-style:none;"><a href="download.php?file=git_tutorial.pdf">Download Support Guide</a></li>
				</div>
				<hr/>
				<div>
					<div class="panel panel-default" style="background-color:rgb(0, 200, 215);">
					  <div class="panel-body">
					    Recent Items
					  </div>
					</div>
					<li style="list-style:none;"><a>Mobile Application Developments</a></li>
					<li style="list-style:none;"><a>Web Application Developments</a></li>
					<li style="list-style:none;"><a>Client Service Executives</a></li>
					<li style="list-style:none;"><a>Accountant</a></li>

				</div>
			</div>
			<div class="col-md-9">
				<div class="jumbotron" style="padding:15%;background-image: url('http://www.newtec.eu/frontend/files/userfiles/images/WEB_TRAIN%26SERV_OperationalSupportServices.jpg');">
				  <h1>e-scapetech support</h1>
				</div>
				<div>
					<p>Welcome to E-scapetech support.With an active maintenance contract, you now have access to the E-scapetech wordclass support organisation. Remember when you have any issue, access to our experts is only a phone awayhave access to the E-scapetech wordclass support organisation. Remember when you have any issue, access to our experts is only a phone away.  </p>
				</div>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne" style="background-color:rgb(0, 200, 215);">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Vision
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        – Design and develop cutting edge technology solutions for different sectors. Business/Enterprise, Consumer, Government, Financial Institutions, Telecommunications industries.<br/>
						– Provide excellent and quality driven solutions using the most effective technology and our local expertise to give our clients the competitive advantage.<br/>
						– Provide Application Services Platform to content owners, content publishers and content providers for the delivery of value-added solutions
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:rgb(0, 200, 215);">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Core Values
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				         – Design and develop cutting edge technology solutions for different sectors. Business/Enterprise, Consumer, Government, Financial Institutions, Telecommunications industries.<br/>
						– Provide excellent and quality driven solutions using the most effective technology and our local expertise to give our clients the competitive advantage.<br/>
						– Provide Application Services Platform to content owners, content publishers and content providers for the delivery of value-added solutions
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree" style="background-color:rgb(0, 200, 215);">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Mission
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body"> – Design and develop cutting edge technology solutions for different sectors. Business/Enterprise, Consumer, Government, Financial Institutions, Telecommunications industries.<br/>
						– Provide excellent and quality driven solutions using the most effective technology and our local expertise to give our clients the competitive advantage.<br/>
						– Provide Application Services Platform to content owners, content publishers and content providers for the delivery of value-added solutions
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
	
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
