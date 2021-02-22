<?php


namespace Composite;


class Group implements Component
{
	/** @var Component[] */
	protected array $components = [];

	public function add(Component $object)
	{
		$this->components[] = $object;
		return $this;
	}

	public function render()
	{
		foreach ($this->components as $component)
		{
			$component->render();
		}
	}

	public function move()
	{
		foreach ($this->components as $component)
		{
			$component->move();
		}
	}

}
