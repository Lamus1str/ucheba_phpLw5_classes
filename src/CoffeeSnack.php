<?php

namespace User\ChocolateFactoryLw5;

class CoffeeSnack extends Snack
{
    public function __construct()
    {
        $this->name = "Шоколадка с кофе";
        $this->chocolate = "темный шоколад";
        $this->topings = ["растворимый кофе", "сливочный крем"];
    }

    public function cut()
    {
        echo "Нарезка плитками", PHP_EOL;
    }
}
