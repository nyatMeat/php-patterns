<?php
namespace State\Tools;

use State\Tool;

class Selection implements Tool
{
	public function mouseDown()
	{
		echo "Selection icon";
	}

	public function mouseUp()
	{
		echo "Draw a dashed rectangle";
	}

}
