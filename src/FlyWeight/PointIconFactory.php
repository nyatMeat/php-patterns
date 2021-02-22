<?php


namespace FlyWeight;


class PointIconFactory
{
	private array $cache = [];

	public function getPointIcon($type)
	{
		if (isset($this->cache[$type]))
		{
			return $this->cache[$type];
		}
		$pointType = new PointIcon($type, 'Icon for type: ' . $type);
		$this->cache[$type] = $pointType;
		return $pointType;
	}
}
