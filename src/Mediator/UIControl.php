<?php

namespace Mediator;

class UIControl
{
	protected DialogBox $owner;

	/**
	 * UIControl constructor.
	 * @param DialogBox $owner
	 */
	public function __construct(DialogBox $owner)
	{
		$this->owner = $owner;
	}


}
