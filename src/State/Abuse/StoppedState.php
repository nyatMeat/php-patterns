<?php
namespace State\Abuse;

class StoppedState implements State
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
		$this->stopwatch->setCurrentState(new RunningState($this->stopwatch));
		echo "Running";
	}

}
