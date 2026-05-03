<?php

namespace User\ChocolateFactoryLw5;

class CoconutSnack extends Snack
{
	public function __construct()
	{
		$this->name = "Кокосовая конфета";
		$this->name = "белый шоколад";
		$this->topings = ["кокосовая стружка", "миндаль"];
	}
	public function cut()
	{
		echo "Нарезка кубиками", PHP_EOL;
	}
}

?>
