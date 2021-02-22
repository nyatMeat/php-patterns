<?php


namespace Composite;


class CompositeSolution
{
	public function __invoke()
	{
		$group1 = new Group();
		$square1 = new Square();
		$group1->add($square1);
		$square2 = new Square();
		$group1->add($square2);

		$group2 = new Group();

		$circle1 = new Circle();
		$group2->add($circle1);
		$circle1 = new Circle();
		$group2->add($circle1);

		$group = new Group();
		$group->add($group1)
		->add($group2);
	}
}
