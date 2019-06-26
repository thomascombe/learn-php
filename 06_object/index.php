<?php

class Student {
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    protected function fullName() {
        return sprintf('%s %s',
            $this->firstName,
            $this->lastName);
    }

    public function sayName() {
        printf('My name is %s !',
            $this->fullName());
    }
}

$alex = new Student("Alex", "Jones");
$alex->sayName();
//$alex->fullName(); // protected method

//echo PHP_EOL . $alex->firstName . PHP_EOL;

class MathStudent extends Student {
    function sumNumbers($firstNumber, $secondNumber) {
        $sum = $firstNumber + $secondNumber;
        printf('%s say that %d + %d = %d',
            $this->fullName(),
            $firstNumber,
            $secondNumber,
            $sum);
    }
}

echo PHP_EOL . PHP_EOL;

$eric = new MathStudent("Éric", "Chang");
$eric->sayName();
echo PHP_EOL;
$eric->sumNumbers(3, 5);