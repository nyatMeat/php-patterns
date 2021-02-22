<?php

namespace Memento;

class EditorState
{
	private string $content;

	/**
	 * EditorState constructor.
	 * @param string $content
	 */
	public function __construct(string $content)
	{
		$this->content = $content;
	}

	/**
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}


}
