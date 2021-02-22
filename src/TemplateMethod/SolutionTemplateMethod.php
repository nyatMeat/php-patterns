<?php

namespace TemplateMethod;

class SolutionTemplateMethod
{
	public function __invoke()
	{
		$task = new TransferMoneyTask();
		$task->execute();
	}
}
