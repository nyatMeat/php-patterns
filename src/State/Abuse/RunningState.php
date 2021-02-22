<?php

namespace State\Abuse;

class RunningState implements State
{

	private Stopwatch $stopwatch;

	/**
	 * RunningState constructor.
	 * @param Stopwatch $stopwatch
	 */
	public function __construct(Stopwatch $stopwatch)
	{
		$this->stopwatch = $stopwatch;
	}


	public function click(): void
	{
		$this->stopwatch->setCurrentState(new StoppedState($this->stopwatch));
		echo "Stopped";
	}

}
