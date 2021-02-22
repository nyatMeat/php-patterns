<?php


namespace Mediator;


class Button extends UIControl
{
	public function __construct(DialogBox $owner)
	{
		parent::__construct($owner);
	}

	private bool $enabled = false;

	/**
	 * @return bool
	 */
	public function isEnabled(): bool
	{
		return $this->enabled;
	}

	/**
	 * @param bool $enabled
	 */
	public function setEnabled(bool $enabled): void
	{
		$this->enabled = $enabled;
		$this->owner->changed($this);
	}


}
