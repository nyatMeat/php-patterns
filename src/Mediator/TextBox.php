<?php

namespace Mediator;

class TextBox extends UIControl
{
	private string $content = '';

	public function __construct(DialogBox $owner)
	{
		parent::__construct($owner);
	}

	/**
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}

	/**
	 * @param string $content
	 */
	public function setContent(string $content): void
	{
		$this->content = $content;
		$this->owner->changed($this);
	}


}
