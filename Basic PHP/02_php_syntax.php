
<?php

/*
Basic Syntax PHP
- 100% PHP code then you no need close a tag. 
*/

echo "Hello World \n"; // no need a " ; " on a last line. 

/*
Single Quote vs Multiline Quote. 
- '' - print exactly. 
- "" - replace a quotes. 

*/

$a = 8;
echo '$a';

// Variable assign by value
$c = 9;
$d = $c;
echo "$d";

// Variable assign by reference
$r = &$c;
$r = 0;

echo "$c";
echo "$d";
echo "$r";
echo "$c";

// Readable 

$username_for_instagram = '@sathiyapriyan_cj';
echo "My INSTAGRAM id is {$username_for_instagram} ";
