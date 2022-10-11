<?php
//Home Task - 02
/*  
    01. Create a Grading System
*/
$marks = 80;

if($marks >= 80 && $marks <= 101 ){
    echo "Your Grade is A+ and Point is 5.00";
}
elseif($marks >= 70 && $marks <= 79){
    echo "Your Grade is A and Point is 4.00";
}
elseif($marks >= 60 && $marks <= 69){
    echo "Your Grade is A- and Point is 3.50";
}
elseif($marks >= 50 && $marks <=59){
    echo "Your Grade is B and Point is 3.00";

} elseif ($marks >= 40 && $marks <= 49) {
    echo "Your Grade is C and Point is 2.00";

} elseif ($marks >= 33 && $marks <= 39) {
    echo "Your Grade is D and Point is 1.00";
}
elseif ($marks >= 0 && $marks <= 32) {
    echo "You Are  Fail !! Point 0.00";

}else{
    echo "Invalid Input";
}





















?>
