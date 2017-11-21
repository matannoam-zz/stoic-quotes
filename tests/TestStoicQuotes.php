<?php

use PHPUnit\Framework\TestCase;

final class QuotesTests extends TestCase
{
    public function testCreate()
    {
        $author = "Cato";
        $text = "Grasp the subject, the words will follow.";
        
        $quote = new Quote($text, $author);

        $this->assertEquals($quote->author(), $author);
        $this->assertEquals($quote->text(), $text);
    }

     public function testCannotCreateWithoutArguments()
     {
        $this->expectException(ArgumentCountError::class);

        new Quote();
     }

     public function testCannotCreateWithoutAuthor()
     {
        $text = "Grasp the subject, the words will follow.";

        $this->expectException(ArgumentCountError::class);

        $quote = new Quote($text);
     }
}
