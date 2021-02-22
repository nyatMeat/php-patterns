<?php
namespace Strategy;

use Strategy\Compressor\Compressor;
use Strategy\Filter\Filter;

class ImageStorage
{
	private Compressor $compressor;
	private Filter $filter;

	/**
	 * ImageStorage constructor.
	 * @param Compressor $compressor
	 * @param Filter $filter
	 */
	public function __construct(Compressor $compressor, Filter $filter)
	{
		$this->compressor = $compressor;
		$this->filter = $filter;
	}


	public function store(string $fileName)
	{
		$this->compressor->compress($fileName);
		$this->filter->apply($fileName);
	}
}
