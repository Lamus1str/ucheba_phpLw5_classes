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

	private function createSnack(string $className): Snack
	{
		if (is_subclass_of($className, Snack::class)) {
			return new $className();
		}
		return new Snack();
	}
}
