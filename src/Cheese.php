<?php

namespace App;

class Cheese extends \Anora\Lib\Pizza
{
    public function __construct()
    {
        $this->name = "Cheese Pizza";
        $this->dough = "Тонкое тесто";
        $this->sauce = "Оливковое масло и базилик";
        $this->toppings = ['Моцарелла', 'Пармезан', 'Орегано'];
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
