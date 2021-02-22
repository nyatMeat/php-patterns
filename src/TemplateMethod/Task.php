<?php

namespace TemplateMethod;


abstract class Task
{

	private AuditTrail $auditTrail;

	/**
	 * Task constructor.
	 * @param AuditTrail|null $auditTrail
	 */
	public function __construct(?AuditTrail $auditTrail = null)
	{
		$this->auditTrail = $auditTrail ?? new AuditTrail();
	}

	final public function execute()
	{
		$this->auditTrail->record();
		$this->doExecute();
	}

	abstract protected function doExecute();


}
