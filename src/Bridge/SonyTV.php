<?php


namespace Bridge;


class SonyTV implements Device
{
	public function setChannel(int $number)
	{
		echo "sony set channel " . $number;
	}

	public function turnOff()
	{
		echo "Sony turn off";
	}

	public function turnOn()
	{
		echo "Sony turn on";
	}
}
