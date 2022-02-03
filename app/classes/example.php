<?php
namespace App\classes;


class Example
{
    public $firstNumber = 10;
    public $firstName;
    public $lastName;

    public function index()
    {
//        echo "hello world";

        $this->firstName ="Sudipto";
        $this->lastName ="Saha";
        echo $this->firstNumber;
        echo '<br>';
        echo $this->firstName;
        echo '<br>';
        echo $this->lastName;
        echo '<br>';
        echo $this->firstName.$this->lastName;
    }

}


/*
 3 major rules for variable

*start with $sign
 * A-Z,a-z,0-9,_()
 * no number in first
 * *standard rules for variable Naming
 * start with small letter
 * meaningful
 * readable
 */