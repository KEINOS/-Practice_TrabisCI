<?php
include('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class Test extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $message = 'Hello, World!';

        $this->assertTrue($message === 'Hello, World!');
    }
}
