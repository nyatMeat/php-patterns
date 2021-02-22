<?php

namespace State\Tools;
use State\Tool;

class Brush implements Tool
{
	public function mouseDown()
	{
		echo "Brush icon";
	}

	public function mouseUp()
	{
		echo "Draw a line";
	}

}
