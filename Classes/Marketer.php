<?php
class Marketer extends Employee {
	const NAME = 'marketer';

	protected $rang;
	protected $salary = 400;
	protected $coffee = 15;
	protected $document = 150;
	protected $leader;

	public function getName() {
		return self::class;
	}
}