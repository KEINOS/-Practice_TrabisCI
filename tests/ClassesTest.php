<?php
include_once('vendor/autoload.php');
include_once('src/Functions.php');
include_once('src/Classes.php');

use PHPUnit\Framework\TestCase;

class ClassesTest extends TestCase
{
    public function setUp()
    {
        //
    }

    /*
     * テストを行うメソッド名は「test*」
     */
    public function testMyClass()
    {
        $message = 'Hello, World!';
        
        $result = MyClass::return_message($message);
        $this->assertTrue($result === $message);

        $test    = new MyClass();
        $result  = $test->return_message($message);

        $this->assertTrue($result === $message);
    }
}
