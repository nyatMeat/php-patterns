<?php


namespace Mediator;


class MediatorSolution
{
public function __invoke()
{
	$dialog = new ArticlesDialogBox();
	$dialog->simulateUserInteraction();
}
}
