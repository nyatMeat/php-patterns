<?php

namespace Command;

class SolutionUndoableCommand
{

	public function __invoke()
	{
		$history = new History();
		$document = new HTMLDocument();
		$document->setContent('Hello world');
		$boldCommand = new BoldCommand($document, $history);
		$boldCommand->execute();
		echo $document->getContent();

		$undoCommand = new UndoCommand($history);
		$undoCommand->execute();
		echo $document->getContent();
	}
}
