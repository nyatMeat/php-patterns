<?php


namespace Observer\PullStyle;


interface SubjectInterface
{

	public function addObserver(PullStyleObserver $observer);

	public function removeObserver(PullStyleObserver $observer);

	public function notifyObservers();
}
