<?php

namespace User\ChocolateFactoryLw5;

class PeanutSnack extends Snack
{
	public function __construct()
	{
		$this->name = "Шоколад с арахисом";
		$this->chocolate = "молочный шоколад";
		$this->topings = ["арахис"];
	}
	public function cut()
	{
		echo "Нарезка по вертикали", PHP_EOL;
	}
}


