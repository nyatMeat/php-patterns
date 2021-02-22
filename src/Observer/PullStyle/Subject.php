<?php

namespace Observer\PullStyle;


class Subject implements SubjectInterface
{
	/** @var PullStyleObserver[] */
	private array $observers;


	public function addObserver(PullStyleObserver $observer)
	{
		$this->observers[] = $observer;
		return $this;
	}

	public function removeObserver(PullStyleObserver $toRemove)
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

	public function notifyObservers()
	{
		foreach ($this->observers as $observer)
		{
			$observer->update();
		}
	}

}
