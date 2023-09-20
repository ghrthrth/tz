<?php

namespace test\app;

class StandartWarehouse implements StrategyInterface
{
    public function calculation(int $quantity): int
    {
        return $quantity;
    }
}