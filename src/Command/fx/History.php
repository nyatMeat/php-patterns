<?php
namespace Command\fx;

class History
{
	private array $commands = [];

	public function push(UndoableCommand $command)
	{
		$this->commands[] = $command;
		return $this;
	}

	public function pop()
	{
		return array_pop($this->commands);
	}
}
