<?php


namespace Adapter;


class ImageView
{
	protected Image $image;

	/**
	 * ImageView constructor.
	 * @param Image $image
	 */
	public function __construct(Image $image)
	{
		$this->image = $image;
	}

	public function apply(Filter $filter)
	{
		$filter->apply($this->image);
	}


}
