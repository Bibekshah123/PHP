<?php

$variable = 8;
echo "Value is now $variable." . "<br>";

// Add 2
$temp = $variable; // temporary variable to hold the original value
$temp = $temp + 2; // add 2
$variable = $temp; // assign the result back to $variable
echo "Add 2. Value is now $variable." . "<br>";

// Subtract 4
$temp = $variable; // temporary variable to hold the previous value
$temp = $temp - 4; // subtract 4
$variable = $temp; // assign the result back to $variable
echo "Subtract 4. Value is now $variable." . "<br>";

// Multiply by 5
$temp = $variable; // temporary variable to hold the previous value
$temp = $temp * 5; // multiply by 5
$variable = $temp; // assign the result back to $variable
echo "Multiply by 5. Value is now $variable." . "<br>";

// Divide by 3
$temp = $variable; // temporary variable to hold the previous value
$temp = $temp / 3; // divide by 3
$variable = $temp; // assign the result back to $variable
echo "Divide by 3. Value is now $variable." . "<br>";

// Increment value by one
$variable++; // increment by one
echo "Increment value by one. Value is now $variable."
?>