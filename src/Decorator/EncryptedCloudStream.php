<?php


namespace Decorator;


class EncryptedCloudStream implements Stream
{
	private Stream $stream;

	/**
	 * EncryptedCloudStream constructor.
	 * @param Stream $stream
	 */
	public function __construct(Stream $stream)
	{
		$this->stream = $stream;
	}


	public function write(string $data): string
	{
		$encrypted = $this->encrypt($data);
		return $this->stream->write($encrypted);
	}

	private function encrypt(string $string)
	{
		return md5($string);
	}
}
