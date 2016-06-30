<?php

/**
 * Couldn't get testRejectsEmptyStringAndNonzeroSpan to pass but stopped
 * as I started just adding if statements rather than thinking the solution
 * through further.
 * TODO: Revisit and solve this last test.
 */
class Series
{
    public $series = [];

    public function __construct(string $series)
    {
        if (ctype_digit($series) == false && $series !== '') {
            throw new InvalidArgumentException('string given contains non-numeric characters');
        }
        $this->series = array_map(function ($item) { return intval($item); }, str_split($series, 1));
    }

    public function largestProduct(int $seriesSize)
    {
        if ($seriesSize > sizeof($this->series) || $seriesSize <= -1) {
            throw new InvalidArgumentException('seriesSize given is too big or negative');
        }

        $largestProduct = 0;
        for ($i = 0; $i < sizeof($this->series) - ($seriesSize - 1); ++$i) {
            $currentProduct = $this->calculateProduct($this->series, $i, $seriesSize);
            if ($currentProduct > $largestProduct) {
                $largestProduct = $currentProduct;
            }
        }

        return $largestProduct;
    }

    public static function calculateProduct(array $series, int $initialIndex, int $sizeOfSeries)
    {
        return array_product(array_slice($series, $initialIndex, $sizeOfSeries));
    }
}
