<?php

namespace Memento;

class History
{
	/** @var EditorState[] */
	private array $states = [];

	public function push(EditorState $state)
	{
		$this->states[] = $state;
	}

	public function pop(): ?EditorState
	{
		if (!$this->states)
		{
			return null;
		}
		return array_pop($this->states);
	}
}
