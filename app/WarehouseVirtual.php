<?php

namespace test\app;

class WarehouseVirtual implements StrategyInterface
{
    public function calculation(int $quantity)
    {
        if ($quantity % 2 == 0 && $quantity % 2 == 1) {
            $quantity += 0;
        }

        return $quantity;
    }

}