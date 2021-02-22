<?php
namespace State;

use State\Abuse\Stopwatch;
use State\Tools\Brush;
use State\Tools\Eraser;

class SolutionState
{
	public function __invoke()
	{
		$canvas = new Canvas();
		$canvas->setCurrentTool(new Brush());
		$canvas->mouseUp();
		$canvas->mouseDown();
		$canvas->setCurrentTool(new Eraser());
		$canvas->mouseUp();
		$canvas->mouseDown();

		$stopWatch = new Stopwatch();
		$stopWatch->click();
	}
}
