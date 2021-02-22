<?php


namespace Observer\PushStyle;


class ObserverPushSolution
{
	public function __invoke()
	{
		$dataSource = new DataSource('123');
		$sheet1 = new SpreadSheet();
		$sheet2 = new SpreadSheet();
		$chart1 = new Chart();
		$chart2 = new Chart();
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
