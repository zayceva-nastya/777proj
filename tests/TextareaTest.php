<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use View\Html\Textarea;


class TextareaTest extends TestCase
{

    public function testHtml()
    {
$text = new Textarea();
        $this->assertIsString($text->html());
    }
}
