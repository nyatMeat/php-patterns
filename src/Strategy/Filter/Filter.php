<?php

namespace Strategy\Filter;


interface Filter
{
	public function apply(string $str): void;
}
