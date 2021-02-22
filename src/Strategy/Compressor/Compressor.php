<?php

namespace Strategy\Compressor;


interface Compressor
{
	public function compress(string $fileName);
}
