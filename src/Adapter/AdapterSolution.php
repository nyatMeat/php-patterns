<?php


namespace Adapter;


use Adapter\AvaFilters\Caramel;

class AdapterSolution
{

	public function __invoke()
	{
		$imageView = new ImageView(new Image());
		$imageView->apply(new VividFilter());
		$imageView->apply(new CaramelFilter(new Caramel()));
	}

}
