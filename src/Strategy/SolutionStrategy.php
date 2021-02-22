<?php

namespace Strategy;

use Strategy\Compressor\JpegCompressor;
use Strategy\Filter\BlackAndWhite;

class SolutionStrategy
{
	public function __invoke()
	{
		$storage = new ImageStorage(new JpegCompressor(), new BlackAndWhite());
		$storage->store('a');
	}
}
