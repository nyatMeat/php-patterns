<?php

namespace Observer\PullStyle;

class SpreadSheet implements PullStyleObserver
{
	private DataSource $source;

	/**
	 * SpreadSheet constructor.
	 * @param DataSource $source
	 */
	public function __construct(DataSource $source)
	{
		$this->source = $source;
	}


	public function update()
	{
		echo "Spreadsheet got notified: ".$this->source->getValue();
	}

}
