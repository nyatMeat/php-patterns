<?php


namespace Bridge;


class RemoteControl
{
	protected Device $device;

	/**
	 * RemoteControl constructor.
	 * @param Device $device
	 */
	public function __construct(Device $device)
	{
		$this->device = $device;
	}


	public function turnOn()
	{
		$this->device->turnOn();
	}

	public function turnOff()
	{

		$this->device->turnOff();
	}


}
