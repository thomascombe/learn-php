<?php

/************************************
 * Types & Variables
 */

// Variables begin with the $ symbol.
// A valid variable name starts with a letter or underscore,
// followed by any number of letters, numbers, or underscores.
// We prefer writing them in camel case, like the following: $myNameIsBryan

// Boolean values are case-insensitive but we prefer writing them in lower case
$boolean = true;
$boolean = false;

// Integers
$int1 = 12;   // => 12
$int2 = -12;  // => -12
$int3 = 012;  // => 10 (a leading 0 denotes an octal number)
$int4 = 0x0F; // => 15 (a leading 0x denotes a hex literal)
// Binary integer literals are available since PHP 5.4.0.
$int5 = 0b11111111; // 255 (a leading 0b denotes a binary number)

// Floats (aka doubles)
$float = 1.234;
$float = 1.2e3;
$float = 7E-10;

// Delete variable
unset($int1);

// Arithmetic
$sum = 1 + 1;        // 2
$difference = 2 - 1; // 1
$product = 2 * 2;    // 4
$quotient = 2 / 1;   // 2

// Shorthand arithmetic
$number = 0;
$number += 1;      // Increment $number by 1
echo $number++;    // Prints 1 (increments after evaluation)
echo ++$number;    // Prints 3 (increments before evaluation)
$number /= $float; // Divide and assign the quotient to $number

// Strings should be enclosed in single quotes;
$sgl_quotes = '$String'; // => '$String'

// Avoid using double quotes except to embed other variables
$dbl_quotes = "This is a $sgl_quotes."; // => 'This is a $String.'

// Special characters are only escaped in double quotes
$escaped = "This contains a \t tab character.";
$unescaped = 'This just contains a slash and a t: \t';

// Enclose a variable in curly braces if needed
$apples = "I have {$number} apples to eat.";
$oranges = "I have ${number} oranges to eat.";
$money = "I have $${number} in the bank.";

// Since PHP 5.3, nowdocs can be used for uninterpolated multi-liners
$nowdoc = <<<'END'
Multi line
string
END;

// Heredocs will do string interpolation
$heredoc = <<<END
Multi line
$sgl_quotes
END;

// String concatenation is done with .
echo 'This string ' . 'is concatenated';

// Strings can be passed in as parameters to echo
echo 'Multiple', 'Parameters', 'Valid';  // Returns 'MultipleParametersValid'

/********************************
 * Constants
 */

// A constant is defined by using define()
// and can never be changed during runtime!

// a valid constant name starts with a letter or underscore,
// followed by any number of letters, numbers, or underscores.
define("FOO", "something");

// access to a constant is possible by calling the chosen name without a $
echo FOO; // Returns 'something'
echo 'This outputs ' . FOO;  // Returns 'This outputs something'
