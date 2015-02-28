<?php
require_once '/../autoload.php';
?>

<?php
class Department {
	public $name;
	public $employees = array();
	public $expenses = array(); //Я помню, что ты был против этой переменной, но с ней просто будет проще удобней посчитать средние значение. Сделай замечание если что-то не так.

	public function __construct($name) {
		$this->name = $name;
	}

	//Я сомневюась в необхадимости этой функции, ведь можно зделать тоже самое снаружи класса:
	//$department->employees[] = new Employee(...);
	public function addEmployeeToDepartment($name, $solary, $coffe, $document, $rang = 1, $leader = false) {
		$this->employees[] = new Employee($name, $solary, $coffe, $document, $rang, $leader);
	}

	public function calculateEmployeesNumberInDepartment() {
		$employeesNumber = count($this->employees);

		return $employeesNumber;
	}

	public function calculateDepartmentExpensesCoffeAndDocuemnt() {
		foreach ($this->employees as $key => $Employee) {
			$calculateExpenses += $Employee->solary;
			$calculateCoffe += $Employee->coffe;
			$calculateDocument += $Employee->document;
		}

		$expenses = array($calculateExpenses, $calculateCoffe, $calculateDocument);

		return $expenses;
	}

	public function calculateAvargeValue() {
		$avargeValue = $this->expenses[0] / $this->expenses[2];

		return $avargeValue;
	}
}
?>