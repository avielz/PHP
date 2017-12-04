<?php
    include 'calc.php';

    $m1 = new Multiply([
        "a" => 5,
        "b" => 8
    ]);

    echo $m1->calculate() . '<br>'; // "40"


    $m2 = new Multiply([
        "a" => 10,
        "b" => 5
    ]);

    echo $m2->calculate() . '<br>'; // "50"

    $d1 = new Division([
        "a" => 10,
        "b" => 5
    ]);

    echo $d1->calculate() . '<br>'; // "2"

    $p1 = new Plus([
        "a" => 10,
        "b" => 5
    ]);

    echo $p1->calculate() . '<br>'; // "15"

    $mi1 = new Minus([
        "a" => 10,
        "b" => 5
    ]);

    echo $mi1->calculate(); // "5"
?>