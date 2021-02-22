<?php
namespace Command\fx;

class Button
{
	private string $label = '';
	private Command $command;

	/**
	 * Button constructor.
	 * @param Command $command
	 */
	public function __construct(Command $command)
	{
		$this->command = $command;
	}


	public function click(): void
	{
		$this->command->execute();
	}

	/**
	 * @return string
	 */
	public function getLabel(): string
	{
		return $this->label;
	}

	/**
	 * @param string $label
	 */
	public function setLabel(string $label): void
	{
		$this->label = $label;
	}


}
