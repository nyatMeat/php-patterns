<?php


namespace Facade;


class FacadeSolution
{
	public function __invoke()
	{
		$service = new NotificationService();
		$service->send(new Message('Hello'), 'target');
	}
}
