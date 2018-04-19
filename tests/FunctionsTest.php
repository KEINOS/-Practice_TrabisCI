<?php
include('vendor/autoload.php');
include('src/Functions.php');

use PHPUnit\Framework\TestCase;

class Test extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $message = 'Hello, World!';
        $result  = echo_message($message);

        $this->assertTrue($result === 'Hello, World!');
    }
}
