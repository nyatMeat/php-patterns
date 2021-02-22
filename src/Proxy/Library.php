<?php


namespace Proxy;


class Library
{
	protected array $ebooks = [];

	public function add(Ebook $ebook)
	{
		$this->ebooks[$ebook->getFileName()] = $ebook;
	}

	public function openEbook(string $fileName)
	{
		return $this->ebooks[$fileName] ?? null;
	}
}
