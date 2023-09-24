<?php

namespace src;

use test\src\WarehouseVirtual;
use PHPUnit\Framework\TestCase;

class WarehouseVirtualTest extends TestCase
{
    private $warehouse;

    protected function setUp(): void
    {
        $this->warehouse = new WarehouseVirtual();
    }

    public function testCalculation()
    {
        // проверка на четное число
        $this->assertEquals(4, $this->warehouse->calculation(4));

        // проверка на нечетное число
        $this->assertEquals(5, $this->warehouse->calculation(5));

        // проверка на ноль
        $this->assertEquals(0, $this->warehouse->calculation(0));
    }
}
