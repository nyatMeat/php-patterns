<?php

namespace Observer;


class SpreadSheet implements ObserverInterface
{
	public function update()
	{
		echo "Spreadsheet got notified";
	}

}
