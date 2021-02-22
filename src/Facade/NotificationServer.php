<?php


namespace Facade;


class NotificationServer
{
	public function connect(string $ipAddress)
	{
		return new Connection();
	}

	public function authenticate(string $appId, string $key)
	{
		return new AuthToken();
	}

	public function send(AuthToken $authToken, Message $message, string $target){
		echo "Sending a message";
	}
}
