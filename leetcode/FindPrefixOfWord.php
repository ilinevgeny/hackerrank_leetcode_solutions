<?php

class FindPrefixOfWord
{
    public function isPrefixOfWord(string $sentence, string $searchWord): int
    {
        return -1;
    }
}

// Example usage

$solution   = new FindPrefixOfWord();
$sentence   = "i love eating burger";
$searchWord = "burg";
$result     = $solution->isPrefixOfWord($sentence, $searchWord);
echo $result;


