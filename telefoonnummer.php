<?php
$pattern = '/[+][0-9]{11}/m';
$pattern2 = '/[0-9]{10}/m';
$input = readline("telnummer pls");

if (preg_match($pattern, $input) || preg_match($pattern2 , $input))
{
    echo("$input is een geldig nummer");
}
else
{
    echo("$input is niet een geldig nummer");
}
