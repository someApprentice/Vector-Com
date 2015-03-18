<?php
class Department {
	public $name;
	public $employees;

	public function __construct($name) {
		$this->employees = new SplObjectStorage();

		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function getLeader() {
		$leader = array_filter($this->makeEmployeesArray(), function($f) {
				return $f->getLeader() == true;
		});

		return $leader;
	}	

	public function addEmployee($employee) {
		$this->employees->attach($employee); 
	}

	public function fireEmployee($employee) {
		$this->employees->detach($employee);
	}

	public function calculateEmployeesNumberInDepartment() {
		return $this->employees->count();
	}

	public function calculateDepartmentTotalSalary() {
		$totalSalary = 0;

		foreach ($this->employees as $Employee) {
			$totalSalary += $Employee->getSalary();
		}

		return $totalSalary;
	}

	public function calculateDepartmentTotalCoffee() {
		$totalCoffee = 0;

		foreach ($this->employees as $Employee) {
			$totalCoffee += $Employee->getCoffee();
		}

		return $totalCoffee;
	}

	public function calculateDepartmentTotalDocument() {
		$totalDocument = 0;

		foreach ($this->employees as $Employee) {
			$totalDocument += $Employee->getDocument();
		}

		return $totalDocument;
	}

	public function calculateAvargeValue() {
		$avargeValue = $this->calculateDepartmentTotalSalary() / $this->calculateDepartmentTotalDocument();

		return round($avargeValue, 2);
	}

	public function makeEmployeesArray() {
		foreach ($this->employees as $object) {
			$employees[] = $object;
		}

		return $employees;
	}
}
?>