<?php

namespace test\app;

interface StrategyInterface
{
    /**
     * Do something.
     */
    public function calculation(int $quantity);
}