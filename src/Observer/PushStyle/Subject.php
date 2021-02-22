<?php

namespace Observer\PushStyle;


class Subject implements SubjectInterface
{
	/** @var PushStyleObserver[] */
	private array $observers;


	public function addObserver(PushStyleObserver $observer)
	{
		$this->observers[] = $observer;
		return $this;
	}

	public function removeObserver(PushStyleObserver $toRemove)
	{
		foreach ($this->observers as $key => $observer)
		{
			if ($observer === $toRemove)
			{
				unset($this->observers[$key]);
				break;
			}
		}
		return $this;
	}

	public function notifyObservers($value)
	{
		foreach ($this->observers as $observer)
		{
			$observer->update($value);
		}
	}

}
