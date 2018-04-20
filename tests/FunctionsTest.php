<?php
include('vendor/autoload.php');
include('src/Functions.php');

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function setUp()
    {
        //
    }
    
    public function testHelloWorld()
    {
        $message = 'Hello, World!';
        $result  = echo_message($message);

        $this->assertTrue($result === 'Hello, World!');
    }
}
