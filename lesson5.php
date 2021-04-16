<?php

$x = 105;

switch ($x) {
    case "Hello":
        echo "Это строковая переменная";
        break;
    case 10:
        echo "Это численная переменная, равна 10";
        break;
    case 5:
        echo "Это численная переменная, равна 5";
        break;
    case 105:
        echo "Это численная переменная, равна 105";
        break;
        default: echo "Переменная не известна";
}
?>