<?php

namespace User\ChocolateFactoryLw5;

class ChocolateFactory
{
    public function orderSnack(string $type)
    {
            $snack = $this->createSnack($type);
            $snack->prepare();
            $snack->cut();
    }

    private function createSnack(string $type): Snack
    {
        if ($type == "coconutSnack") {
            return new CoconutSnack();
        }
        if ($type == "coffeeSnack") {
            return new CoffeeSnack();
        }
        if ($type == "peanutSnack") {
            return new PeanutSnack();
        }

            return new Snack();
    }
}
