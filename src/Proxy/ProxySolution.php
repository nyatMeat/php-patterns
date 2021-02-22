<?php


namespace Proxy;


class ProxySolution
{
	public function __invoke()
	{
		$library = new Library();
		$library->add(new LoggingEbookProxy('a'));
		$library->add(new LoggingEbookProxy('b'));
		$library->add(new LoggingEbookProxy('c'));
		$library->openEbook('a');
	}
}
