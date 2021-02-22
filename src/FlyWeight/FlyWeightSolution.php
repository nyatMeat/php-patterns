<?php


namespace FlyWeight;


class FlyWeightSolution
{
	public function __invoke()
	{
		$service = new PointService(new PointIconFactory());
		foreach ($service->getPoints() as $point)
		{
			$point->draw();
		}
	}
}
