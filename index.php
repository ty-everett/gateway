<?php include('header.php'); 
printHeader('home'); ?>
<center>
<img src="img/logo.png" alt="Gateway Logo" />
<form id="loginform" action="#" method="POST">
<h2>Log In</h2>
<input id="username" type="text" placeholder="Username" class="UIButton" /><br/><br/>
<input id="password" type="password" placeholder="Password" class="UIButton" /></br/><br/>
<input type="submit" class="UIButton" value="Log In" /><br/><br/>
</form>
<a href="forgot.php">Forgot Username or Password</a>
</center>
<?php
include('footer.php');
?>