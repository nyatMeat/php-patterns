<?php

namespace State;


class Canvas
{
	private Tool $currentTool;

	public function mouseDown()
	{

		$this->currentTool->mouseDown();
	}

	public function mouseUp()
	{
		$this->currentTool->mouseUp();
	}

	/**
	 * @return Tool
	 */
	public function getCurrentTool(): Tool
	{
		return $this->currentTool;
	}

	/**
	 * @param Tool $currentTool
	 */
	public function setCurrentTool(Tool $currentTool): void
	{
		$this->currentTool = $currentTool;
	}


}
