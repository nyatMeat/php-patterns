<?php
namespace Command\fx;

interface UndoableCommand extends Command
{
	public function unexecute(): void;
}
