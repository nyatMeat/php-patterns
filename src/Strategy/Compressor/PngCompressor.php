<?php

namespace Strategy\Compressor;


class PngCompressor implements Compressor
{
	public function compress(string $fileName)
	{
		echo "Compress to png";
	}
}
