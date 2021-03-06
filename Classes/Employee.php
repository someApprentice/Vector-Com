<?php
abstract class Employee {
	protected $name;

	protected $rang;
	protected $salary;
	protected $coffee;
	protected $document;
	protected $leader;

	public function __construct($rang = 1, $leader = false) {
		//$this->name = $name;
		//$this->salary = $salary;
		//$this->coffee = $coffee;
		//$this->document = $document;
		$this->rang = $rang;
		$this->leader = $leader;
	}

	public function setRang($rang) {
		$this->rang = $rang;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}

	public function setCoffee($coffee) {
		$this->coffee = $coffee;
	}

	public function setLeader($leader) {
		$this->leader = $leader;
	}

	public function getName() {
		return static::class;
	}

	public function getRang() {
		return $this->rang;
	}

	public function getSalary() {
		switch ($this->rang) {
			case 1:
				$salary = $this->salary;
			break;

			case 2:
				$salary = $this->salary + ($this->salary * 0.25);
			break;

			case 3:
				$salary = $this->salary + ($this->salary * 0.50);
			break;

			default: 
				throw new Exception('Incorrect rang: ' . $this->rang);
		}
 
		if ($this->leader) {
			$salary = $salary + ($salary * 0.50);
		}
 
		return $salary;
	}

	public function getCoffee() {
		$coffee = $this->coffee;

		if ($this->leader) {
			$coffee = $this->coffee * 2;
		}

		return $coffee;
	}

	public function getDocument() {
		$document = $this->document;

		if ($this->leader) {
			$document = 0;
		}

		return $document;
	}

	public function isLeader() {
		return $this->leader;
	}
}