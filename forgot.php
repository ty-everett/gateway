<?php include('header.php'); 
printHeader('forgot'); ?>
<center>
<img src="img/logo.png" alt="Gateway Logo" />
<form id="forgotform" action="#" method="POST">
<h2>Forgot Username of Password?</h2>
<p>No problem, just enter your recovery phrase!</p>
<input id="recovery" type="text" placeholder="Recovery Phrase" class="UIButton" /><br/><br/>
<input type="submit" class="UIButton" value="Log In" />
</form>
<p><b style="color:#ff0000;">NOTE: </b>Your recovery phrase is the only way to log into
your account. Once you log in, transfer your funds to a new account to which you have
access immediately!</p>
</center>
<?php
include('footer.php');
?>