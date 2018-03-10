<?php 
session_start();
if($_SESSION['first']){ ?>
var aud = new Audio('audio/load.mp3');
setTimeout(function(){
	$('.loading').fadeOut();
}, 1800);
setTimeout(function(){
	aud.play();
}, 600);
<?php } ?>

$(document).ready(function(){
	$('#loginform').on('submit', function(e){
		e.preventDefault();
		user = $('#username').val();
		pass = $('#password').val();
		hex = sha512(user + " bitcoin cash " + pass);
		hex = hex.slice(7, 31);
		m = Mnemonic.fromHex(hex);
    words = m.toWords();
		pseed = sha512(words);
		alert(hex);
		alert(words);
		alert(pseed);
	});
});