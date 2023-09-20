<?php

namespace test\app;

class WarehouseTemporary implements StrategyInterface
{
    public function rasschet(int $quantity)
    {
        $quantity += 0;
        echo $quantity;
    }
}