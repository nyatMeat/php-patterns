<?php


namespace Observer\PullStyle;


class ObserverPullSolution
{
	public function __invoke()
	{
		$dataSource = new DataSource('123');
		$sheet1 = new SpreadSheet($dataSource);
		$sheet2 = new SpreadSheet($dataSource);
		$chart1 = new Chart($dataSource);
		$chart2 = new Chart($dataSource);
		$dataSource->addObserver($sheet1)
			->addObserver($sheet2)
			->addObserver($chart2)
			->addObserver($chart1);
		$dataSource->setValue('444');

		$dataSource->removeObserver($chart2)
			->removeObserver($sheet1);
		$dataSource->setValue('222');
	}
}
