<?php


namespace Adapter;


use Adapter\AvaFilters\Caramel;

class CaramelAdapter extends Caramel implements Filter
{
	public function apply(Image $image)
	{
		$this->init();
		$this->render($image);
	}
}
