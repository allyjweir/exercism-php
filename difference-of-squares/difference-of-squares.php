<?php

function sumOfSquares(int $num)
{
    $numbers = range(0, $num);
    $squares = array_map(function(int $curNum) { return $curNum * $curNum; }, $numbers);
    $sum = array_reduce($squares, function(int $carry, int $item) { return $carry + $item; }, 0);
    return $sum;
}

function squareOfSums(int $num)
{
    $sum = array_reduce(range(0, $num), function(int $carry, int $item) { return $carry + $item; }, 0);
    return $sum * $sum;
}

function difference(int $num)
{
    return squareOfSums($num) - sumOfSquares($num);
}
