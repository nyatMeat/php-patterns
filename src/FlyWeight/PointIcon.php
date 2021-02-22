<?php


namespace FlyWeight;


class PointIcon
{
	private string $type;
	private string $icon;

	/**
	 * PointIcon constructor.
	 * @param string $type
	 * @param string $icon
	 */
	public function __construct(string $type, string $icon)
	{
		$this->type = $type;
		$this->icon = $icon;
	}

	/**
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}

	/**
	 * @return string
	 */
	public function getIcon(): string
	{
		return $this->icon;
	}



}
