<?php
$pattern = '/[+][0-9]{11}/m';
$pattern2 = '/0[0-9]{9}/m';
$input = $argv[1];

	if (preg_match($pattern, $input) || preg_match($pattern2 , $input))
	{
	    echo("$input is een geldig telefoonnummer");
	}
	else
	{
	    echo("$input is niet een geldig telefoonnummer");
	}


