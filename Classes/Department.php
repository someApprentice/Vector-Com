<?php
class Department {
	public $name;
	public $employees = array();
	public $expenses = array(); //Я помню, что ты был против этой переменной, но с ней просто будет проще удобней посчитать средние значение. Сделай замечание если что-то не так.

	public static $departments = array();

	public function __construct($name) {
		$this->name = $name;
	}


	public function addEmployee($employee) {
		$this->employees[] = $employee; 
	}

	public function unsetEmployee($id) {
		unset($this->employees[$id]);
	}

	public function calculateEmployeesNumberInDepartment() {
		return count($this->employees);
	}

	public function calculateDepartmentTotalSalary() {
		$totalSalary = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalSalary += $Employee->salary;
		}

		return $totalSalary;
	}

	public function calculateDepartmentTotalCoffee() {
		$totalCoffee = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalCoffee += $Employee->coffee;
		}

		return $totalCoffee;
	}

	public function calculateDepartmentTotalDocument() {
		$totalDocument = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalDocument += $Employee->document;
		}

		return $totalDocument;
	}

	public function calculateAvargeValue() {
		$avargeValue = $this->calculateDepartmentTotalSalary() / $this->calculateDepartmentTotalDocument();

		return round($avargeValue, 2);
	}
}
?>