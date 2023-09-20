<?php

namespace test\app;

class ProductDistribution
{
    public int $id;
    public int $productId;
    public int $warehouseId;
    public int $quantity;


    public function __construct(int $id, int $productId, int $warehouseId, int $quantity)
    {

        $this->id = $id;
        $this->productId = $productId;
        $this->warehouseId = $warehouseId;
        $this->quantity = $quantity;
    }
}