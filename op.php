<?php
$x = $_POST["one"];
$y = $_POST["two"];
$op =  $_POST["operator"];



switch ($op) {
    case '*':
        $result=$x*$y;
        break;

    case '+':
        $result=$x+$y;
        break;

    case '-':
        $result=$x-$y;
        break;

    case '/':
        $result=$x/$y;
        break;
    default:
        echo "error";
        break;
}

echo "El resultado es: ".$result ;





?>