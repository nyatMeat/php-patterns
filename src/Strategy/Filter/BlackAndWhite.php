<?php

namespace Strategy\Filter;


class BlackAndWhite implements Filter
{
	public function apply(string $str): void
	{
		echo "Apply black and white filter";
	}
}
