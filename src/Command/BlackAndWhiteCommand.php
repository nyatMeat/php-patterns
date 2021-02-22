<?php
namespace Command;

use Command\fx\Command;

class BlackAndWhiteCommand implements Command
{
	public function execute(): void
	{
		echo "Black and white";
	}

}
