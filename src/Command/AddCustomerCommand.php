<?php

namespace Command;


use Command\fx\Command;

class AddCustomerCommand implements Command
{
	private CustomerService $customerService;

	/**
	 * AddCustomerCommand constructor.
	 * @param CustomerService $customerService
	 */
	public function __construct(CustomerService $customerService)
	{
		$this->customerService = $customerService;
	}

	public function execute(): void
	{
		$this->customerService->addCustomer();
	}


}
