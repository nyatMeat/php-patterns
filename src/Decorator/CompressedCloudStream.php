<?php


namespace Decorator;


class CompressedCloudStream implements Stream
{

	private Stream $stream;

	/**
	 * CompressedCloudStream constructor.
	 * @param Stream $stream
	 */
	public function __construct(Stream $stream)
	{
		$this->stream = $stream;
	}

	public function write(string $data): string
	{
		$compressed = substr($data, 0, 10);
		return $this->stream->write($compressed);
	}


}
