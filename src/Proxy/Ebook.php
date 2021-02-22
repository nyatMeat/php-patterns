<?php

namespace Proxy;

interface Ebook
{
	public function show();

	/**
	 * @return string
	 */
	public function getFileName(): string;
}
