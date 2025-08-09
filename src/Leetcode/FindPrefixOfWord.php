<?php

namespace App\Leetcode;

class FindPrefixOfWord
{
    public function isPrefixOfWord(string $sentence, string $searchWord): int
    {
        $words = array_values(array_filter(explode(' ', $sentence), fn($w) => $w !== ''));
        foreach ($words as $i => $word) {
            if (strpos($word, $searchWord) === 0) {
                return $i + 1;
            }
        }
        return -1;
    }
}

// Example usage

$solution   = new FindPrefixOfWord();
$sentence   = "i love eating burger";
$searchWord = "burg";
$result     = $solution->isPrefixOfWord($sentence, $searchWord);
//echo $result;
