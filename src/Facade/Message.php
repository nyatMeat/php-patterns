<?php


namespace Facade;


class Message
{
	private string $content;

	/**
	 * Message constructor.
	 * @param string $content
	 */
	public function __construct(string $content)
	{
		$this->content = $content;
	}


}
