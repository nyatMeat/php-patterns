<?php


namespace Decorator;


class DecoratorSolution
{

	public function __invoke()
	{
		$cloudStream = new CompressedCloudStream(new EncryptedCloudStream(new CloudStream()));
		echo $this->storeCreditCard($cloudStream);
	}


	public function storeCreditCard(Stream $stream)
	{
		return $stream->write("123-123-123");
	}
}
