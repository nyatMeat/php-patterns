<?php

namespace Command\editor;

class HTMLDocument
{
	private string $content;

	public function makeBold()
	{
		$this->content = "<b>" . $this->content . "</b>";
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
	}


}
