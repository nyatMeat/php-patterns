<?php


namespace Observer;


class DataSource extends Subject
{

	private $value;

	/**
	 * DataSource constructor.
	 * @param $value
	 */
	public function __construct($value)
	{
		$this->value = $value;
	}


	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value): void
	{
		$this->value = $value;
		$this->notifyObservers();
	}


}
