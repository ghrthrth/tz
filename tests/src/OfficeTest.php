<?php

namespace src;

use test\src\Office;
use PHPUnit\Framework\TestCase;

class OfficeTest extends TestCase
{
    //Тестирование конструктора класса Office на заполнение поля имени корректным значением
    public function test__construct()
    {
        $office = new Office(16, "test");
        $this->assertSame("test", $office->name);

    }
}
