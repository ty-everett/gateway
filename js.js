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
		getAddress(pseed);
	});
	$('#forgotform').on('submit', function(e){
		e.preventDefault();
		words = $('#recovery').val();
		// TODO: stop the users from being fucktards
		// what I mean is, make the recovery phrase standard (one space between words,
		// all caps, no commas, etc, betfore hashing it).
		// but also try hashing it different ways if that doesn't work in case ther're
		// just tards and managed to get it wrong in the beginning
		pseed = sha512(words);
		getAddress(pseed);
	});
});

