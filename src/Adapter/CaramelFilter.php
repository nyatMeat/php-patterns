<?php


namespace Adapter;


use Adapter\AvaFilters\Caramel;

class CaramelFilter implements Filter
{
	protected Caramel $caramel;

	/**
	 * CaramelFilter constructor.
	 * @param Caramel $caramel
	 */
	public function __construct(Caramel $caramel)
	{
		$this->caramel = $caramel;
	}

	public function apply(Image $image)
	{
		$this->caramel->init();
		$this->caramel->render($image);
	}


}
