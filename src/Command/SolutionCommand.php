<?php
namespace Command;

use Command\fx\Button;
use Command\fx\CompositeCommand;

class SolutionCommand
{
	public function __invoke()
	{
		$service = new CustomerService();
		$command = new AddCustomerCommand($service);
		$button = new Button($command);
		$button->click();

		$blackAndWhite = new BlackAndWhiteCommand();
		$resize = new ResizeCommand();
		$composite = (new CompositeCommand())
			->add($blackAndWhite)
			->add($resize);
		$composite->execute();
	}
}
