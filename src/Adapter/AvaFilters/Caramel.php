<?php

namespace Adapter\AvaFilters;

use Adapter\Image;

class Caramel
{
	public function init()
	{

	}

	public function render(Image $image)
	{
		echo "Applying caramel filter";
	}
}
