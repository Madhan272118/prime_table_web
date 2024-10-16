<?php

use CodeIgniter\Test\CIUnitTestCase;

class PrimeTableTest extends CIUnitTestCase
{
    public function testGeneratePrimes()
    {
        $controller = new \App\Controllers\PrimeTableController();
        $result = $this->invokeMethod($controller, 'generatePrimes', [5]);
        $expected = [2, 3, 5, 7, 11];
        $this->assertEquals($expected, $result);
    }

    public function testIsPrime()
    {
        $controller = new \App\Controllers\PrimeTableController();
        $this->assertTrue($this->invokeMethod($controller, 'isPrime', [2]));
        $this->assertTrue($this->invokeMethod($controller, 'isPrime', [3]));
        $this->assertFalse($this->invokeMethod($controller, 'isPrime', [4]));
        $this->assertTrue($this->invokeMethod($controller, 'isPrime', [5]));
    }
}
