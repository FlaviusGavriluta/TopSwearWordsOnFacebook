<?php declare(strict_types = 1);

use NLP\WordCount;
use PHPUnit\Framework\TestCase;

final class TestWordCount extends TestCase
{
    private $wordCount;

    protected function setUp() : void
    {
        $this->wordCount = new WordCount();
    }

    protected function tearDown() : void
    {
        $this->wordCount = null;
    }

    public function testNewWordCountInstance_Create() : void
    {
        $this->assertInstanceOf(WordCount::class, $this->wordCount);
    }

    public function testNewWordCountInstance_IsEmpty() : void
    {
        $this->assertTrue($this->wordCount->isEmpty());
    }

    public function testIfGetReturnsNull_WhenWordIsNotInWordCount() : void
    {
        $this->assertEquals(null, $this->wordCount->get('word'));
    }

    public function testAfterOnePut_WordCountIsNotEmpty() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertFalse($this->wordCount->isEmpty());
    }

    public function testAfterPuttingX_PutReturnsX() : void
    {
        $this->assertEquals(9, $this->wordCount->put('word', 9));
    }

    public function testAfterPuttingXAndY_PutReturnsNull() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertEquals(null, $this->wordCount->put('word', 9));
    }

    public function testAfterPuttingXThenY_GetReturnsX() : void
    {
        $this->wordCount->put('word', 9);
        $this->wordCount->put('word', 8);
        $this->assertEquals(9, $this->wordCount->get('word'));
    }

    public function testAfterPuttingX_GetReturnsX() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertEquals(9, $this->wordCount->get('word'));
    }

    public function testAfterOnePutAndOneRemove_WordCountIsEmpty() : void
    {
        $this->wordCount->put('word', 9);
        $this->wordCount->remove('word');

        $this->assertTrue($this->wordCount->isEmpty());
    }

    public function testAfterTwoPutsAndOneRemove_WordCountIsNotEmpty() : void
    {
        $this->wordCount->put('word1', 9);
        $this->wordCount->put('word2', 8);
        $this->wordCount->remove('word1');

        $this->assertFalse($this->wordCount->isEmpty());
    }

    public function testAfterOnePut_RemoveReturnsTrue() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertTrue($this->wordCount->remove('word'));
    }

    public function testWithoutPut_RemoveReturnsFalse() : void
    {
        $this->assertFalse($this->wordCount->remove('word'));
    }

    public function testAfterReplaceXToY_GetReturnsY() : void
    {
        $this->wordCount->put('word', 9);
        $this->wordCount->replace('word', 8);
        $this->assertEquals(8, $this->wordCount->get('word'));
    }

    public function testAfterReplaceXToY_ReplaceReturnsX() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertEquals(9, $this->wordCount->replace('word', 8));
    }

    public function testAfterReplaceXToYOfNonExistentWord_ReplaceReturnsNull() : void
    {
        $this->assertEquals(null, $this->wordCount->replace('word', 8));
    }

    public function testAfterClearEmptyWordCount_ClearReturnsFalse() : void
    {
        $this->assertFalse($this->wordCount->clear());
    }

    public function testAfterPutAndClear_ClearReturnsTrue() : void
    {
        $this->wordCount->put('word', 9);
        $this->assertTrue($this->wordCount->clear());
    }

    public function testAfterOnePutAndClear_WordCountIsEmpty() : void
    {
        $this->wordCount->put('word', 9);
        $this->wordCount->clear();
        $this->assertTrue($this->wordCount->isEmpty());
    }
}
