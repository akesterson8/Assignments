<?php

class Calculator{
    public $operator;
    public int $firstInt;
    public int $secondInt;
public function calc($operator ="", $firstInt = "", $secondInt = ""){
    if ($operator == "" || $firstInt == "" || $secondInt == ""){
        echo "you must enter a string and two numbers" . "<br>";
    }
    else if ($operator === "+"){
        $answer = $firstInt + $secondInt;
        echo "The sum of the numbers is".$answer ."<br>";

    }else if ($operator === "-"){
        $answer = $firstInt - $secondInt;
        echo "The difference of the numbers is ". $answer ."<br>";

    }else if ($operator === "*"){
        $answer = $firstInt * $secondInt;
        echo "the product of the numbers is ".$answer . "<br>";

    }else if (($firstInt == 0||$secondInt == 0) && $operator === "/"){
        echo "cannot divide by zero" . "<br>";

    }else if (($firstInt !=0 && $secondInt != 0) && $operator === "/"){
        $answer = $firstInt / $secondInt;
        echo "the division of the numbers is". $answer . "<br>";

    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>