<?php

namespace test\src;

class WarehouseTemporary implements StrategyInterface
{
    public function calculation(int $quantity)
    {
        $quantity += 0;
        echo $quantity;
    }
}