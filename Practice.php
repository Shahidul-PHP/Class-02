<?php 
echo '<title>Web Dev Class 02 - CIT</title>';


$a = 15;
$b = 25;
$c = $a + $b;

//echo $c;

echo '</br>';

$x = 50;
$x += 20;

echo $x;


// ternery operator //
echo '</br>';


$num1 = 50;
$num2 = 900;


echo ($num1 > $num2 ? 'Condtion is true' : 'condition is false');

echo '</br>';


// function 


function addition(){
    echo "Function is working Properlly";
}

addition(); echo '</br>';
addition(); echo '</br>';


function test($a,$b,$c){
    echo $a + $b - $c;
}

test(890,90,30);

echo '</br>';

define('pi', 3.1416);

echo "The value of PIE is ".pi;



// srting function //


$one = 'I want to be a Developer';

echo '</br>';

echo strlen($one);
echo '</br>';

echo strrev($one);
echo '</br>';

echo str_replace('I want to be a Developer', 'I want to be a good web developer',
$one );

echo '</br>';

echo "total counting word in - $one - is : ".str_word_count($one);


echo '</br>';

$pass = 3131268;

echo password_hash($pass, PASSWORD_DEFAULT);


?>