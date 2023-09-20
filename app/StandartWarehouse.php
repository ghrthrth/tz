<?php

namespace test\app;

class StandartWarehouse implements StrategyInterface
{
    public function rasschet(int $quantity): int
    {
        return $quantity;
    }
}