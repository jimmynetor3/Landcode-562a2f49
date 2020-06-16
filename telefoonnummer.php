<?php
$pattern = '/[+][0-9]{11}/m';
$pattern2 = '/0[0-9]{9}/m';
$pattern3 =  '/[+]316[0-9]{8}/m';
$input = $argv[1];

	if (preg_match($pattern, $input) || preg_match($pattern2 , $input) || preg_match($pattern3 , $input))
	{
	    echo("$input is een geldig telefoonnummer");
	}
	else
	{
	    echo("$input is niet een geldig telefoonnummer");
	}


