<?php
class Department {
	public $name;
	public $employees = array();
	public $expenses = array(); //Я помню, что ты был против этой переменной, но с ней просто будет проще удобней посчитать средние значение. Сделай замечание если что-то не так.

	public function __construct($name) {
		$this->name = $name;
	}


	public function addEmployee($employee) {
		$this->employees[] = $employee; 
	}

	public function calculateEmployeesNumberInDepartment() {
		return count($this->employees);
	}

	public function calculateDepartmentTotalSolary() {
		$totalSolary = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalSolary += $Employee->solary;
		}

		return $totalSolary;
	}

	public function calculateDepartmentTotalCoffe() {
		$totalCoffe = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalCoffe += $Employee->coffe;
		}

		return $totalCoffe;
	}

	public function calculateDepartmentTotalDocument() {
		$totalDocument = 0;

		foreach ($this->employees as $key => $Employee) {
			$totalDocument += $Employee->document;
		}

		return $totalDocument;
	}

	public function calculateAvargeValue() {
		$avargeValue = $this->calculateDepartmentTotalSolary() / $this->calculateDepartmentTotalDocument();

		return round($avargeValue, 2);
	}
}
?>