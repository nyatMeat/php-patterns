<?php
namespace Command;

use Command\fx\Command;

class ResizeCommand implements Command
{
	public function execute(): void
	{
		echo "Resizing";
	}


}
