<?php

namespace Strategy\Compressor;


class JpegCompressor implements Compressor
{
	public function compress(string $fileName)
	{
		echo "Compress to jpeg";
	}

}
