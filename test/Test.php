<?php

class PracticeTest extends PHPUnit_Framework_TestCase {
    public function testHelloWorld()
    {
        $message = 'Hello, World!';

        $this->assertTrue($message === 'Hello, World!');
    }
}

