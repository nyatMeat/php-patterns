<?php

namespace Strategy\Filter;

class HighContrast implements Filter
{
	public function apply(string $str): void
	{
		echo "Applying high contrast filter";
	}
}
