<?php
/**
 * Это единая точка входа для нашего приложения.
 */

use test\src\Product;
use test\src\ProductDistribution;
use test\src\StandartWarehouse;
use test\src\Warehouse;
use test\src\WarehouseTemporary;
use test\src\WarehouseVirtual;

error_reporting(E_ALL); // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require __DIR__ . '/../vendor/autoload.php';

// инициализация объектов
$wharehouse = new Warehouse();
$wharehouse->setId(1);
$wharehouse->setName("test");
$wharehouse->setType("стандартный");
$wharehouse->setOfficeId(1);

$productDistribution = new ProductDistribution(1, 1, 1, 40);
$product = new Product(1, "test");

if ($wharehouse->getOfficeId() == $wharehouse->getId() && $productDistribution->productId == $product->id && $productDistribution->warehouseId == $wharehouse->getId()) {
    if ($wharehouse->getType() == "стандартный") {
        $wharehouse->setStrategy(new StandartWarehouse());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->quantity)} относится к офису с id: {$wharehouse->getId()}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "виртуальный") {
        $wharehouse->setStrategy(new WarehouseVirtual());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->quantity)} относится к офису с id: {$wharehouse->getId()}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "временный") {
        $wharehouse->setStrategy(new WarehouseTemporary());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->quantity)} относится к офису с id: {$wharehouse->getId()}" . PHP_EOL;
    } else {
        echo "Склада с таким типом нет";
    }
} else {
    echo "Проверьте правильность заполнения объектов";
}

