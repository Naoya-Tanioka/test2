<?php
function outputnumber($a)
{
    echo "引数の値は" . $a . "です";
}

outputNumber(2);

function outputHello()
{
    echo "Hello world";
}

outputHello();//① ;

function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2,4);
echo $total;

function addNumber($number5 , $number6)
{
    $utiwake = $number5 + $number6;
    return $utiwake;
}

$toatal = addNumber(2,3);
print $toatal;

function train1($score1 , $score2 , $score3)
{
    $goukei = $score1 + $score2+ $score3;
    if($goukei > 210){
        echo "合計点は" . $goukei . "点なので合格です";
    }elseif($goukei =210){
        echo "合計点は" . $goukei . "点ちょうどでした";
    }else {
        echo "合計点は" . $goukei . "点なので不合格です";
    }
    return;
}
train1(80,60,70);

function squareArea($lowerbase , $height)
{
    return $lowerbase * $height;
}
function triangleArea($lowerbase , $height)
{
    return $lowerbase * $height / 2;
}
function trapezoidArea($lowerbase , $upperbase , $height)
{
    return ($lowerbase + $upperbase) *$height /2;
}

echo squareArea(2,4);
echo triangleArea(4,6);
echo trapezoidArea(6,8,10);

function Area()
{
    if($Area="trapezoid")
}

