<?php
function printHeader($p){
// we need to determine if this is the first pageload of session
// if so, display loading animations and such
session_start();
if(!isset($_SESSION['first'])){
	$_SESSION['first'] = 1;
}else{
	$_SESSION['first'] = 0; // 1 to debug start
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gateway</title>
<!-- TODO favicon -->
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/sha512.js"></script>
<script src="js/mnemonic.js"></script>
<script src="js/js.js?nocache=<?=rand(0,10000)?>"></script>
</head>
<body>
<?php if($_SESSION['first']){ ?>
<div class="loading">
<center>
<img class="loadspin" src="img/bchicon.png" />
<h1>Welcome</h1>
<h2>to the Bitcoin Cash community!</h2>
</center>
</div>
<?php }
} ?>