<?php

namespace test\app;

class WarehouseVirtual implements StrategyInterface
{
    public function rasschet(int $quantity)
    {
        if ($quantity % 2 == 0 && $quantity % 2 == 1) {
            $quantity += 0;
        }

        return $quantity;
    }

}