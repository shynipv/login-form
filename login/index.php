<?php
require  'config.php';
session_start();
?>
<?php
if (isset($_SESSION['id'])) {
	header("location: register.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN_UP/LOGIN FORM</title>
  <link rel="stylesheet" href="style.css">
<!--<?php include 'style.css/css.html';?>-->
</head>
<?php
if($_server['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['login']))
  {
   require 'login.php';
  }
  elseif(isset($_POST['register']))
  {
   require 'login.php';
  }
}
?>
<body>

  <div class="form">
    <!--<ul class="tab-group">-->
    <a href="index.php" class="start">Sign up</a>
  <a href="login.php" class="start">Log In</a>
    <!--</ul>-->
<div>
<div id="signup"><br>
  <h1>Sign Up for Free</h1>
  <form action="login.php" method="post" >
  <div class="field-wrap">
    <!--<label>First Name<span class="req"></span>
</label><br>-->
  <input type="firstname" class="req" name="firstname" placeholder="First Name"><br>
  </div>

  <div class="field-wrap">
    <!--<label>Last Name<span class="req"></span>
  </label><br>-->
  <input type="lastname" class="req" name="lastname" placeholder="Last Name"/>
  </div>

  <div class="field-wrap">
    <!--<label>Email Adress<span class="req"></span>
  </label><br>-->
  <input type="email" class="req" name="email" placeholder="Email Address" />
</div>

<div class="field-wrap">
  <!--<label>
    Set a Password<span class="req"></span>
  </label><br>-->
  <input type="password" class="req" name="password" placeholder="Set a Password" />
</div>

<button type="submit" class="button button-block" name="register"/>GET STARTED</button>
</form>
</div>



<script src=''></script>
<script src="js/index.js"></script>
</body>
</html>
