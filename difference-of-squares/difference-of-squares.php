<?php

function sumOfSquares(int $num)
{
    $squares = array_map(function (int $item) { return $item * $item; }, range(0, $num));

    return array_sum($squares);
}

function squareOfSums(int $num)
{
    return array_sum(range(0, $num)) ** 2;
}

function difference(int $num)
{
    return squareOfSums($num) - sumOfSquares($num);
}
