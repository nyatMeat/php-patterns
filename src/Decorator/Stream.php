<?php


namespace Decorator;


interface Stream
{
	public function write(string $data):string;
}
