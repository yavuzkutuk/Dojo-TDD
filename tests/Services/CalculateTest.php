<?php
namespace Test;

use App\Services\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testAddition()
    {
        $calculate = new Calculate();
        $this->assertEquals(10, $calculate->addition(5,5));
    }
}
