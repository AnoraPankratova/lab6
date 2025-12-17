<?php

namespace App;

class Vegan extends \Anora\Lib\Pizza
{
    public function __construct()
    {
        $this->name = "Vegan Pizza";
        $this->dough = "Тонкое тесто из цельной пшеницы";
        $this->sauce = "Оливковое масло с лимоном";
        $this->toppings = ['Авокадо', 'Помидоры черри', 'Шпинат', 'Маринованные огурцы'];
    }

    public function cut(): void
    {
        echo "Веганскую пиццу нарезают ромбами — чтобы было модно\n";
    }
}
