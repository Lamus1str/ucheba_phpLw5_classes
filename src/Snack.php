<?php

namespace User\ChocolateFactoryLw5;

class Snack 
{
	private string $name;
	private string $chocolate;
	private array $topings;

	public function __construct(string $name, string $chocolate, array $topings)
	{
		$this->name = $name;
		$this->chocolate = $chocolate;
		$this->topings = $topings;
	}

	public function prepare()
	{
		echo "Началось создание сладости: {$this->name}", PHP_EOL;
		echo "Добавляется шоколад {$this->chocolate}", PHP_EOL;
		echo "Добавляются начинки: ";
		$first = true;
		foreach ($this->topings as $toping) {
			if ($first) 
				$first = false;
			else
				echo ", ";
			echo $toping;
		}
		echo PHP_EOL;
	}

	public function cut()
	{
		echo "Не требуется нарезка", PHP_EOL;
	}
}

?>
