<?php

namespace test\src;

class WarehouseVirtual implements StrategyInterface
{
    public function calculation(int $quantity):int
    {
        if ($quantity % 2 == 0 && $quantity % 2 == 1) {
            $quantity += 0;
        }

        return $quantity;
    }

}