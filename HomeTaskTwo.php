<?php
//Home Task - 02
/*  
    02. Check Letter Voiel or Consonent using Switch Case
*/

echo '<title>Home Task 02</title>';

$letters = 'i';


switch($letters){
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "The letter is a Vowel";
    break;

    default:
        echo "The letter is a Consonant";

}

















?>