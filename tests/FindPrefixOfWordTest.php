<?php

use PHPUnit\Framework\TestCase;
use App\Leetcode\FindPrefixOfWord;

class FindPrefixOfWordTest extends TestCase
{
    public function testReturnsMinusOneByDefault(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "this is a test";
        $searchWord = "nope";
        $this->assertSame(-1, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testFindsPrefixAtStart(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "apple banana cherry";
        $searchWord = "app";
        $this->assertSame(1, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testFindsPrefixInMiddle(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "apple banana cherry";
        $searchWord = "ban";
        $this->assertSame(2, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testFindsPrefixAtEnd(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "apple banana cherry";
        $searchWord = "che";
        $this->assertSame(3, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testHandlesMultipleSpaces(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "apple   banana   cherry";
        $searchWord = "ban";
        $this->assertSame(2, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testHandlesEmptySentence(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "";
        $searchWord = "any";
        $this->assertSame(-1, $solver->isPrefixOfWord($sentence, $searchWord));
    }

    public function testHandlesLongSentenceWithRepeatedWords(): void
    {
        $solver = new FindPrefixOfWord();
        $sentence = "foo bar baz foo bar baz";
        $searchWord = "qux";
        $this->assertSame(-1, $solver->isPrefixOfWord($sentence, $searchWord));
    }
}
