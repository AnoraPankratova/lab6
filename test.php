<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ItalianPizzaStore;

echo "=== Заказываем пиццу в итальянской пиццерии ===\n\n";

$store = new ItalianPizzaStore();
$store->orderPizza('cheese');
echo "\n";
$store->orderPizza('pepperoni');
echo "\n";
$store->orderPizza('vegan');
