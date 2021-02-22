<?php


namespace Proxy;


class RealEbook implements Ebook
{

	protected string $fileName;

	/**
	 * RealEbook constructor.
	 * @param string $fileName
	 */
	public function __construct(string $fileName)
	{
		$this->fileName = $fileName;
		$this->load();
	}


	public function getFileName(): string
	{
		return $this->fileName;
	}

	public function show()
	{
		echo "show ebook: " . $this->fileName;
	}

	private function load()
	{
		echo "Loading from ebook: " . $this->fileName;
	}
}
