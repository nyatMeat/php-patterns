<?php

namespace Observer;

class Chart implements ObserverInterface
{
	public function update()
	{
		echo "Chart got notified";
	}
}
