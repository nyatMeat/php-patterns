<?php


namespace Bridge;


class BridgeSolution
{
	public function __invoke()
	{
		$sonyTV = new SonyTV();

		$advancedRemote = new AdvancedRemoteControl($sonyTV);
		$advancedRemote->turnOn();
		$advancedRemote->setChannel(123);
		$advancedRemote->turnOff();


		$samsung = new SonyTV();

		$advancedRemote = new AdvancedRemoteControl($samsung );
		$advancedRemote->turnOn();
		$advancedRemote->setChannel(123);
		$advancedRemote->turnOff();
	}
}
