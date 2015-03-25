<?php
class Department {
	private $name;
	private $employees;

	public function __construct($name) {
		$this->employees = new SplObjectStorage();

		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function getEmployees() {
		return $this->employees;
	}

	public function getLeaders() {
		$leader = array_filter(iterator_to_array($this->employees), function($f) {
				return $f->isLeader() == true;
		});

		return $leader;
	}	

	public function addEmployee(Employee $employee) {
		$this->employees->attach($employee); 
	}

	public function fireEmployee(Employee $employee) {
		$this->employees->detach($employee);
	}

	public function setLeader($newLeader) {
		$this->dismissLeaders();

		$newLeader->setLeader(true);
	}

	public function dismissLeaders() {
		$leaders = $this->getLeaders();

		foreach ($leaders as $leader) {
			$leader->setLeader(false);
		}
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

		return $avargeValue;
	}
}