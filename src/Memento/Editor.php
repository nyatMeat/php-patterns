<?php
namespace Memento;

class Editor
{
	private string $content = '';

	public function createState(): EditorState
	{
		return new EditorState($this->content);
	}

	public function restoreState(EditorState $state): Editor
	{
		$this->content = $state->getContent();
		return $this;
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
	 * @return Editor
	 */
	public function setContent(string $content): Editor
	{
		$this->content = $content;
		return $this;
	}


}
