<?php

namespace test\src;

class StandartWarehouse implements StrategyInterface
{
    public function calculation(int $quantity): int
    {
        return $quantity;
    }
}