<?php

namespace User\ChocolateFactoryLw5; 

class ChocolateFactory
{
	public function orderSnack(string $type) {
		$this->createSnack($type);
	}

	private function createSnack(string $type): Snack {
		return new Snack("", "", []);
	}
}

?>
