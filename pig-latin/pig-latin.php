<?php

class PigLatin {

    public static function translate(string $string) {
        $words = explode(" ", $string);
        return implode(" ", array_map("PigLatin::translateWord", $words));
    }

    public static function translateWord(string $word)
    {
        $vowels = ["a", "e", "i", "o", "u", "yt", "xr"];  // Includes pseudo-vowels
        $oddities = ["ch", "qu", "squ", "thr", "th", "sch"];

        foreach($vowels as $vowel) {
            if (substr($word, 0, strlen($vowel)) === $vowel) {
                return $word . "ay";
            }
        }

        foreach($oddities as $oddity) {
            if (substr($word, 0, strlen($oddity)) === $oddity) {
                return substr($word, strlen($oddity)) . $oddity . "ay";
            }
        }

        return substr($word, 1) . substr($word, 0, 1) . "ay";
    }
}

 ?>
