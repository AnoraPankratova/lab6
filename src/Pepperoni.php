<?php

namespace App;

class Pepperoni extends \Anora\Lib\Pizza
{
    public function __construct()
    {
        $this->name = "Pepperoni Pizza";
        $this->dough = "Толстое тесто";
        $this->sauce = "Томатный соус";
        $this->toppings = ['Пепперони', 'Моцарелла', 'Орегано', 'Чеснок'];
    }

    public function cut(): void
    {
        echo "Пиццу с пепперони нарезают квадратами\n";
    }
}
