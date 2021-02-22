<?php


namespace Bridge;


class SamsungTV implements Device
{
	public function setChannel(int $number)
	{
		echo "Samsung set channel " . $number;
	}

	public function turnOff()
	{
		echo "Samsung turn off";
	}

	public function turnOn()
	{
		echo "Samsung turn on";
	}
}
