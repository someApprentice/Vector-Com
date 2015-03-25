<?php
class Analyst extends Employee {
	const NAME = 'analyst';

	protected $rang;
	protected $salary = 800;
	protected $coffee = 50;
	protected $document = 5;
	protected $leader;

	public function getName() {
		return self::class;
	}
}