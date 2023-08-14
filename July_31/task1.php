<?php
/*  
PHP Basic Tasks    
Monday 31-7-2023   
Create new repo with name PHP. This repo contain folder “PHPTask31-7-2023”.                                              
Logical Statements and Operators           		         
1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’

2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’
*/
/*
3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’
 */


 function fun($num1,$num2){
  if($num1 == $num2)
  {
    echo ( $num1 + $num2 ) * 3 ;
  }else{
    echo $num1+$num2;
  }

 }
 fun(2,3);

 /*
4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’
*/

function sum_30($num1,$num2){

if($num1 +$num2 == 30)
{
    echo "true";

}else{
    echo "false";
}

}


sum_30(20,10);
/*

}

5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’

*/
echo "<br>";
function multible_3($num)
{
if( $num % 3 ==0)
echo "true";
else
echo "false";

}
multible_3(20);

/*


6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’
*/
echo "<br>";
function inclusive($num)
{
if( $num >= 20 && $num<=50)
echo "true";
else
echo "false";

}
inclusive(20);

echo "<br>";

/*

7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9

*/
// echo "<br>";
// function largest($num1, $num2,$num3)
// {
// if( $num1 >= $num2 && $num1 >= $num3)
// {

//     echo $num1;

// }elseif($num2 >= $num1 && $num2> =$num3) {
//     echo $num2;
// } else {
//     echo $num3;
   
// }

// }

// largest(2,3,9);
$arr=[ 1, 5, 9 ];
echo max($arr);
echo "<br>";

/*
8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit
*/


function bill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } elseif ($units <= 150) {
        $totalBill += 50 * 2.50; 
        $units -= 50;
        $totalBill += $units * 5.00;
    } elseif ($units <= 250) {
        $totalBill += 50 * 2.50; 
        $totalBill += 100 * 5.00;
        $units -= 150;
        $totalBill += $units * 6.20;
    } else {
        $totalBill += 50 * 2.50; 
        $totalBill += 100 * 5.00;
        $totalBill += 100 * 6.20; 
        $units -= 250;
        $totalBill += $units * 7.50;
    }
    
    return $totalBill;
}
echo bill(280);

echo "<br>";

/*


9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’
*/
echo "<br>";
function eligible($age)
{
if( $age >= 18)
echo " is eligible to vote";

else
echo "is no eligible to vote";


}
eligible(20);

echo "<br>";


/*
10.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’

*/
function check_num($num)
{
if( $num < 0)
{echo "negative";}
elseif($num >0)
{echo "positive";}
else
{
    echo "num is 0";
}
}
check_num(-1);

echo "<br>";

/*

11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division
*/
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Cannot divide by zero";
    } else {
        return $num1 / $num2;
    }
}
echo "<br>";
/*
12.	Write a PHP to find the grade for the student,
 after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’

Range	Grade
<60	F
<70	D
<80	C
<90	B
<100 A


*/
function calculateGrade($scores) {
    $totalSubjects = count($scores);
    $totalScore = array_sum($scores);
    $averageScore = $totalScore / $totalSubjects;
    
    if ($averageScore < 60) {
        return 'F';
    } elseif ($averageScore < 70) {
        return 'D';
    } elseif ($averageScore < 80) {
        return 'C';
    } elseif ($averageScore < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

// Sample input
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

// Output
$grade = calculateGrade($scores);
echo "The grade for the student is: " . $grade;








?>