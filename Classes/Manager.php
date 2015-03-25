<?php
class Manager extends Employee {
	const NAME = 'manager';

	protected $rang;
	protected $salary = 500;
	protected $coffee = 20;
	protected $document = 200;
	protected $leader;

	public function getName() {
		return self::class;
	}
}