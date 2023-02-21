<?php
echo "Assignment 3";
echo "<br>";
echo "<br>";
echo "Simple Calulator Using only If Statement.";
echo "<br>";
//19211@Faisal_Solangi.
echo "<br>";



// This Variable is matcing the condition.
$choice = 3;

// Assign the values to two variables..
$num1 = 20;
echo "value of num1: ".$num1;
echo "<br>";

$num2 = 20;
echo "Value of num2: ".$num2;
echo "<br>";
echo "<br>";


// If there is condition is match it print sum.

//Addition of two numbers.
if ($choice == 1){
    $sum = $num1 + $num2;
    echo "Total Addition is : ".$sum;
}

//Substraction of two numbers.
if ($choice == 2){
    $sub = $num1 - $num2;
    echo "Subtraction is: ".$sub;
    
}


//multiplication of two numbers.
if ($choice == 3){
    $mul = $num1 * $num2;
    echo "Multiplication is: ".$mul;
}


//Division of two numbers.
if ($choice == 4){
    $div = $num1 / $num2;
    echo "Division : ".$div;
}

// Module/Reminder of two Numbers
if ($choice == 5){
    $rem = $num1 % $num2;
    echo "Reminder is : ".$rem;
}

// If there is  greater then or less then 1 to 5 number inserted
// It shows the invalid number Alert..
if ($choice < 1 || $choice > 5){
    echo "Insert Valid Number Between 1 to 5.";
}


?>