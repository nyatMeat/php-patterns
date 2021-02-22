<?php

namespace Observer\PushStyle;

class Chart implements PushStyleObserver
{
	public function update($value)
	{
		echo "Chart got notified:" . $value;
	}
}
