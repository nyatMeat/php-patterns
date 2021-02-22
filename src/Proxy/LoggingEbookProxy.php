<?php


namespace Proxy;


class LoggingEbookProxy implements Ebook
{
	private string $fileName;
	private ?RealEbook $ebook = null;

	/**
	 * EbookProxy constructor.
	 * @param string $fileName
	 */
	public function __construct(string $fileName)
	{
		$this->fileName = $fileName;
	}


	public function getFileName(): string
	{
		return $this->fileName;
	}

	public function show()
	{
		if (!$this->ebook)
		{
			$this->ebook = new RealEbook($this->fileName);
		}
		echo 'Logging';
		$this->ebook->show();
	}
}
