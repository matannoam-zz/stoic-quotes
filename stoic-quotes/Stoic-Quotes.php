<?php

final class Quote
{
    private $author;

    public function __construct($text, $author)
    {
        $this->author = $author;
        $this->text = $text;
    }

    public function author()
    {
        return $this->author;
    }

    public function text()
    {
        return $this->text;
    }
}
