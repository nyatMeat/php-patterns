<?php


namespace Observer\PushStyle;


interface SubjectInterface
{

	public function addObserver(PushStyleObserver $observer);

	public function removeObserver(PushStyleObserver $observer);

	public function notifyObservers($value);
}
