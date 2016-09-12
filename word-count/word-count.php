<?php

    function wordCount(string $input)
    {
        $words = prepareWordList($input);
        $output = [];
        foreach ($words as $word) {
            if (array_key_exists($word, $output)) {
                $output[$word] += 1;
            } else {
                $output[$word] = 1;
            }
        }
        return $output;
    }

    function prepareWordList(string $input) {
        $stripped = preg_replace('/[^a-z\d]+/i', ' ', mb_strtolower($input));
        return explode(" ", trim($stripped));
    }

 ?>
