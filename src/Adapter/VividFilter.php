<?php


namespace Adapter;


class VividFilter implements Filter
{
		public function apply(Image $image){
			echo "Applying vivid filter";
		}

}
