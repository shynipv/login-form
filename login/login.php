<?php
require  'config.php';
session_start();
?>
<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 )
{
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else
{
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) )
    {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else
    {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN_UP/LOGIN FORM</title>
  <!--<?php include 'style.css/css.html';?>-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form">
    <!--<ul class="tab-group">-->
    <a href="index.php" class="start">Sign up</a>
  <a href="login.php" class="start">Log In</a>
    <!--</ul>-->
<div>

<div id="login"><br>
  <h1 class="wel">Welcome Back!</h1>
  <form action="login.php" method="post">

    <div class="field-wrap">
    <!--<label>
        Email Adress<span class="req"></span>
      </label><br>-->
      <input type="email" class="req" name="email" placeholder="Email Address"/>
    </div>

    <div class="field-wrap">
      <!--<label>
        Password<span class="req"></span>
      </label><br>-->
      <input type="password" class="req" name="password" placeholder="Password"/>
    </div>

    <p class="forget"><a href="forgot.php">Forgot Password?</a></p>
    <button class="buton button-block" name="login"/>LOG IN</button>
</form>
</div>

<script src=''></script>
<script src="js/index.js"></script>
</body>
</html>
