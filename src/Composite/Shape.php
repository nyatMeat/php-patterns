<?php

namespace Composite;

class Shape implements Component
{
	public function render()
	{
		echo "Render shape";
	}

	public function move()
	{
		echo "Move " . static::class;
	}

}
