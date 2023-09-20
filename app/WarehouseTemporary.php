<?php

namespace test\app;

class WarehouseTemporary implements StrategyInterface
{
    public function calculation(int $quantity)
    {
        $quantity += 0;
        echo $quantity;
    }
}