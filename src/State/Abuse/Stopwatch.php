<?php
namespace State\Abuse;

class Stopwatch
{
	private State $currentState;

	public function click()
	{
		$this->currentState->click();
	}

	/**
	 * @return State
	 */
	public function getCurrentState(): State
	{
		return $this->currentState;
	}

	/**
	 * @param State $currentState
	 */
	public function setCurrentState(State $currentState): void
	{
		$this->currentState = $currentState;
	}


}
