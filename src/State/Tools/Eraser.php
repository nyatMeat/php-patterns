<?php

namespace State\Tools;
use State\Tool;

class Eraser implements Tool
{
	public function mouseDown()
	{
		echo 'Eraser icon';
	}

	public function mouseUp()
	{
		echo "Erase something";
	}

}
