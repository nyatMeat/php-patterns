<?php


namespace Bridge;


class AdvancedRemoteControl extends RemoteControl
{

	public function __construct(Device $device)
	{
		parent::__construct($device);
	}

	public function setChannel(int $channelNumber)
	{

		$this->device->setChannel($channelNumber);
	}

}
