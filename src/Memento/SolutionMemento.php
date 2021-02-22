<?php
namespace Memento;


class SolutionMemento
{
	public function __invoke()
	{
		$editor = new Editor();
		$history = new History();
		$editor->setContent('a');
		$history->push($editor->createState());

		$editor->setContent('b');
		$history->push($editor->createState());
		$editor->setContent('c');
		$history->push($editor->createState());
		$editor->restoreState($history->pop())->restoreState($history->pop());
		assert($editor->getContent() == 'b');
	}
}
