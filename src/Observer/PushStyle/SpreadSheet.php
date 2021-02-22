<?php

namespace Observer\PushStyle;

class SpreadSheet implements PushStyleObserver
{
	public function update($value)
	{
		echo "Spreadsheet got notified: ".$value;
	}

}
