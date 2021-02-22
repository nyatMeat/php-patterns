<?php

namespace Observer\PullStyle;


class Chart implements PullStyleObserver
{
	private DataSource $source;

	/**
	 * Chart constructor.
	 * @param DataSource $source
	 */
	public function __construct(DataSource $source)
	{
		$this->source = $source;
	}


	public function update()
	{
		echo "Chart got notified:" . $this->source->getValue();
	}
}
