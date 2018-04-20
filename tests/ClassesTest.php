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
    public function testMessage()
    {
        $message = 'Hello, World!';
        
        $test    = new Message();
        $result  = $test->echo($message);

        $this->assertTrue($result === 'Hello, World!');
    }
}
