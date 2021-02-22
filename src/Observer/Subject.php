<?php

namespace Observer;


class Subject implements SubjectInterface
{
	/** @var ObserverInterface[] */
	private array $observers;


	public function addObserver(ObserverInterface $observer)
	{
		$this->observers[] = $observer;
		return $this;
	}

	public function removeObserver(ObserverInterface $toRemove)
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
