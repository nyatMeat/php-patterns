<?php


namespace FlyWeight;


class PointService
{
	private PointIconFactory $factory;


	/** @var Point[] */
	private array $points;

	/**
	 * PointService constructor.
	 * @param PointIconFactory $factory
	 */
	public function  __construct(PointIconFactory $factory)
	{
		$this->factory = $factory;
	}

	/**
	 * @return Point[]
	 */
	public function getPoints(): array
	{
		return $this->points;
	}

	/**
	 * @param Point[] $points
	 */
	public function setPoints(array $points): void
	{
		$this->points = $points;
	}

	public function addPoint(Point $point)
	{
		$this->points[] = $point;
		return $this;
	}


}
