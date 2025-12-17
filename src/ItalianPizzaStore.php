<?php

namespace App;

use Anora\Lib\PizzaStore;
use App\Cheese;
use App\Pepperoni;
use App\Vegan;

class ItalianPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): \Anora\Lib\Pizza
    {
        return match ($type) {
            'cheese' => new Cheese(),
            'pepperoni' => new Pepperoni(),
            'vegan' => new Vegan(),
            default => throw new \InvalidArgumentException("Нет такой пиццы: $type")
        };
    }
}
