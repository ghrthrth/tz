<?php
/**
 * Это единая точка входа для нашего приложения.
 */

use test\app\Office;
use test\app\Product;
use test\app\ProductDistribution;
use test\app\StandartWarehouse;
use test\app\Warehouse;
use test\app\WarehouseTemporary;
use test\app\WarehouseVirtual;

error_reporting(E_ALL); // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require __DIR__ . '/../vendor/autoload.php';

// инициализация объектов
$wharehouse = new Warehouse();
$wharehouse->setId(1);
$wharehouse->setName("test");
$wharehouse->setType("стандартный");
$wharehouse->setOfficeId(1);

$productDistr = new ProductDistribution(1, 1, 1, 40);
$product = new Product(1, "test");
$office = new Office(1, "test");

if ($wharehouse->getOfficeId() == $office->id && $productDistr->productId == $product->id && $productDistr->warehouseId == $wharehouse->getId()) {
    if ($wharehouse->getType() == "стандартный") {
        $wharehouse->setStrategy(new StandartWarehouse());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->rasschet($productDistr->quantity)} относится к офису с id: {$office->id}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "виртуальный") {
        $wharehouse->setStrategy(new WarehouseVirtual());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->rasschet($productDistr->quantity)} относится к офису с id: {$office->id}" . PHP_EOL;
    } elseif ($wharehouse->getType() == "временный") {
        $wharehouse->setStrategy(new WarehouseTemporary());
        echo "Склад {$wharehouse->getName()} тип: {$wharehouse->getType()} кол-во товаров: {$wharehouse->rasschet($productDistr->quantity)} относится к офису с id: {$office->id}" . PHP_EOL;
    } else {
        echo "Склада с таким названием нет";
    }
} else {
    echo "Проверьте правильность заполнения объектов";
}

