<?php


namespace FlyWeight;


class Point
{
	private int $x;
	private int $y;
	private PointIcon $icon;

	/**
	 * Point constructor.
	 * @param int $x
	 * @param int $y
	 * @param PointIcon $icon
	 */
	public function __construct(int $x, int $y, PointIcon $icon)
	{
		$this->x = $x;
		$this->y = $y;
		$this->icon = $icon;
	}


	public function draw()
	{
		echo sprintf('%s at (%d, %d)', $this->icon->getType(), $this->x, $this->y);

	}




}
