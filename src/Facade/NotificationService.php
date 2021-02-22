<?php


namespace Facade;


class NotificationService
{

	public function send(Message $message, string $target)
	{
		$server = new NotificationServer();
		$connection = $server->connect('ip');
		$authToken = $server->authenticate('appId', 'key');
		$server->send($authToken, $message, $target);
		$connection->disconnect();

	}
}
