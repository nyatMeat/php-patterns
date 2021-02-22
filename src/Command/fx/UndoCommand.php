<?php
namespace Command\fx;

class UndoCommand implements Command
{
	private History $history;

	/**
	 * UndoCommand constructor.
	 * @param History $history
	 */
	public function __construct(History $history)
	{
		$this->history = $history;
	}

	public function execute(): void
	{
		/** @var UndoableCommand $element */
		$element = $this->history->pop();
		if ($element)
		{
			$element->unexecute();
		}
	}


}
