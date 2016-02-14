<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:../php/login.php');
}

echo "this is the session variable " . $_SESSION['wrongusername'];

if (!$_SESSION['wrongusername'] || !$_SESSION['wrongemail']) {
	$_SESSION ['wrongusername'] = "";
	$_SESSION ['wrongemail'] = "";
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="shortcut icon" href="../images/icon.ico">
<link href="../css/mystyle.css" rel="stylesheet" type="text/css">
<link href="../css/navigation.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" 
crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
crossorigin="anonymous"></script>

<script type="text/javascript">

      var currentTime = new Date().getHours();
      if (0 <= currentTime&&currentTime < 6) {
       document.write("<link rel='stylesheet' href='../css/night.css' type='text/css'>");
      }
      if (6 <= currentTime&&currentTime <18) {
       document.write("<link rel='stylesheet' href='../css/mystyle.css' type='text/css'>");
      }
	  if (18 <= currentTime&&currentTime < 24) {
       document.write("<link rel='stylesheet' href='../css/night.css' type='text/css'>");
      }
</script>
<noscript><link href="../css/mystyle.css" rel="stylesheet"></noscript>
</head>
<body>
	<div id="wrapper">
    <div id="headerwrapper">
	<div id="leftHeader">
    <img src="../images/logo_crop.jpg" alt="logo" width="100%" height="100%">
    </div>
	<div id="rightHeader">
    <img src="../images/logo_right.png" alt="logo" width="100%" height="100%">
    </div>
    </div>
		
			<div id="navbar">
<label for="show-menu" class="show-menu">Show Menu</label>
<input type="checkbox" id="show-menu" role="button">
     <ul id="menu">
	<li><a href="../index.html">Home</a></li>
   	<li><a href="../pages/about.html">About Us &#65516;</a>
        <ul class="hidden">
		<li><a href="../pages/faqs.html">FAQ</a></li>
        </ul></li>
		<li><a href="../pages/designs.html">Designs &#65516;</a>
		<ul class="hidden">
		<li><a href="../pages/appliances.html">Appliances</a></li>
		<li><a href="../pages/fitouts.html">Fit Outs</a></li>
        <li> <a href="../pages/additionals.html">Additionals</a></li>
		</ul></li>
		<li><a href="../pages/processes.html">Our Processes </a></li>
	<li><a href="../pages/testimonials.html">Testimonials</a></li>
	<li><a href="../pages/contacts.html">Contact Us &#65516;</a>
    <ul class="hidden">
    <li><a href="../pages/login.html">Login</a></li>
  		</ul></li>
        </ul>
</div>
		<div id="mainContent">
        <h3>Welcome to AllStyle Homes - Login</h3>
        <div id="login">
	<form name="htmlform" method="post" action="html_form_send.php">
      <label>Username</label>
   <br/>
      	<input  type="text" name="username" maxlength="50" size="40">
   <br/> <br/>
      <label>Password</label>
   <br/>
      	<input type="password" name="password" maxlength="50" size="40">
   <br/> <br/>
      	<input type="submit" value=" Log In " class="animation">
	</form>
    </div>
			</div>
        
        <div id="sidebar">
        <a><img  class="displayed" src="../images/land.jpg" alt="New Start Grant" height="130" width="180"></a>

     <a><img class="displayed"  src="../images/house.jpg" alt="Home and land from 270000" height="130" width="180"></a>

        <a  href="https://greatstartgrant.osr.qld.gov.au/quick-calculate.php" target="_blank" ><img class="displayed"  src="../images/loan.jpg" alt="Loan Calculator" height="130" width="180"></a>
        </div>
        
		
        
		<div id="footer"><p>&copy; AllStyle Homes  2015
			<a href="pages/privacy.html"><span class="footer">Copyright and Privacy</span></a></p></div>
            </div>
	</body>
</html>
