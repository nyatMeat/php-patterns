<?php

namespace Command;
use Command\editor\HTMLDocument;
use Command\fx\History;

class BoldCommand implements UndoableCommand
{
	private string $prevContent = '';
	private HTMLDocument $document;
	private History $history;

	/**
	 * BoldCommand constructor.
	 * @param HTMLDocument $document
	 * @param History $history
	 */
	public function __construct(HTMLDocument $document, History $history)
	{
		$this->document = $document;
		$this->history = $history;
	}


	public function execute(): void
	{
		$this->prevContent = $this->document->getContent();
		$this->document->makeBold();
		$this->history->push($this);
	}

	public function unexecute(): void
	{
		$this->document->setContent($this->prevContent);
		$this->history->pop();
	}
}
