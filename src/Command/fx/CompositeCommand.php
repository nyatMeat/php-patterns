<?php

namespace Command\fx;
class CompositeCommand implements Command
{

	/** @var Command[] */
	private array $commands = [];

	public function add(Command $command): CompositeCommand
	{
		$this->commands[] = $command;
		return $this;
	}

	public function execute(): void
	{
		foreach ($this->commands as $command)
		{
			$command->execute();
		}
	}
}
