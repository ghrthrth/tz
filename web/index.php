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
$wharehouse->setIds(1);
$wharehouse->setNames("test");
$wharehouse->setType("стандартный");
$wharehouse->setOfficeId(1);

$productDistribution = new ProductDistribution();
$productDistribution->setId(1);
$productDistribution->setQuantity(3);
$productDistribution->setWarehouseId(1);
$productDistribution->setProductId(1);

$product = new Product();
$product->setId(1);
$product->setName("test");

if ($wharehouse->getOfficeId() == $wharehouse->getIds() && $productDistribution->getProductId() == $product->getId() && $productDistribution->getWarehouseId() == $wharehouse->getOfficeId()) {
    if ($wharehouse->getType() == "стандартный") {
        $wharehouse->setStrategy(new StandartWarehouse());
        echo "Склад {$wharehouse->getNames()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->getQuantity())} относится к офису с id: {$wharehouse->getOfficeId()}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "виртуальный") {
        $wharehouse->setStrategy(new WarehouseVirtual());
        echo "Склад {$wharehouse->getNames()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->getQuantity())} относится к офису с id: {$wharehouse->getOfficeId()}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "временный") {
        $wharehouse->setStrategy(new WarehouseTemporary());
        echo "Склад {$wharehouse->getNames()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->calculation($productDistribution->getQuantity())} относится к офису с id: {$wharehouse->getOfficeId()}" . PHP_EOL;
    } else {
        echo "Склада с таким типом нет";
    }
} else {
    echo "Проверьте правильность заполнения объектов";
}

