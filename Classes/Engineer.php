<?php
class Engineer extends Employee {
	const NAME = 'engineer';

	protected $rang;
	protected $salary = 200;
	protected $coffee = 5;
	protected $document = 50;
	protected $leader;

	public function getName() {
		return self::class;
	}
}