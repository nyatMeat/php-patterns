<?php

namespace Mediator;

class ListBox extends UIControl
{
	public function __construct(DialogBox $owner)
	{
		parent::__construct($owner);
	}

	private string $selection = '';

	/**
	 * @return string
	 */
	public function getSelection(): string
	{
		return $this->selection;
	}

	/**
	 * @param string $selection
	 */
	public function setSelection(string $selection): void
	{
		$this->selection = $selection;
		$this->owner->changed($this);
	}


}
