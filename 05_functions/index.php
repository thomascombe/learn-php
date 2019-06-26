<?php

/********************************
 * Functions
 */

// Define a function with "function":
function myFunction()
{
    return 'Hello';
}

echo myFunction(); // => "Hello"

// A valid function name starts with a letter or underscore, followed by any
// number of letters, numbers, or underscores, but we prefer writing them in camel case.

function add($x, $y = 1)
{
    // $y is optional and defaults to 1
    $result = $x + $y;
    return $result;
}

// Since PHP 7 you can use type hinting;
// Allowed types are: scalars (int, string, array, bool, float, etc.) and objects
// Note that since PHP 7.1 it is possible to use type hinting with null values,
// eg. ?string (accepts string or null values)
// Also since PHP 7.1, it is possible to declare a function as returning nothing: function foo(): void
function sub(int $x, int $y = 1): int
{
    // $y is optional and defaults to 1
    $result = $x - $y;
    return $result;
}

echo add(4); // => 5
echo add(4, 2); // => 6

// $result is not accessible outside the function
// print $result; // Gives a warning.

// Since PHP 5.3 you can declare anonymous functions;
$inc = function ($x) {
    return $x + 1;
};

echo $inc(2); // => 3

function foo(string $x, string $y, string $z): void
{
    echo "$x - $y - $z";
}

// Functions can return functions
function bar(string $x, string $y): Closure
{
    // Use 'use' to bring in outside variables
    return function (string $z) use ($x, $y) {
        foo($x, $y, $z);
    };
}

$bar = bar('A', 'B');
$bar('C'); // Prints "A - B - C"

// You can call named functions using strings
$function_name = 'add';
echo $function_name(1, 2); // => 3
// Useful for programatically determining which function to run.
// Or, use call_user_func(callable $callback [, $parameter [, ... ]]);

// You can get all the parameters passed to a function
function parameters(): void
{
    $numargs = func_num_args();
    if ($numargs > 0) {
        echo func_get_arg(0) . ' | ';
    }
    $args_array = func_get_args();
    foreach ($args_array as $key => $arg) {
        echo $key . ' - ' . $arg . ' | ';
    }
}

parameters('Hello', 'World'); // Hello | 0 - Hello | 1 - World |

// Since PHP 5.6 you can get a variable number of arguments
function variable(string $word, ...$list): void
{
    echo $word . " || ";
    foreach ($list as $item) {
        echo $item . ' | ';
    }
}

variable("Separate", "Hello", "World"); // Separate || Hello | World |
