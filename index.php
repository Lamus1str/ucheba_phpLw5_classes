<?php

require "vendor\autoload.php";

use User\ChocolateFactoryLw5\ChocolateFactory;

$factory = new ChocolateFactory();

$factory->orderSnack("coconutSnack");
$factory->orderSnack("coffeeSnack");
$factory->orderSnack("peanutSnack");
