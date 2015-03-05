<?php
class Employee {
	public $name;

	public $rang;
	public $salary;
	public $coffee;
	public $document;
	public $leader;

	public function __construct($name, $salary, $coffee, $document, $rang = 1, $leader = false) {
		$this->name = $name;
		$this->salary = $salary;
		$this->coffee = $coffee;
		$this->document = $document;
		$this->rang = $rang;
		$this->leader = $leader;

		$this->salary = $this->calculateSalary();
		$this->coffee  = $this->calculateCoffee();
		$this->document = $this->calculateDocument();
	}

	public function calculateSalary() {
		switch ($this->rang) {
			case 1:
				$salary = $this->salary; //Хотелось бы услышать твое мнение по поводу того, что я использую такое же имя переменной как и у свойства. Не приведт ли это к путанице?
			break;

			case 2:
				$salary = $this->salary + ($this->salary * 0.25);
			break;

			case 3:
				$salary = $this->salary + ($this->salary * 0.50);
			break;
		}
 
		if ($this->leader) {
			$salary = $salary + ($salary * 0.50);
		}
 
		return $salary;
	}

	public function calculateCoffee() {
		$coffee = $this->coffee;

		if ($this->leader) {
			$coffee = $this->coffee * 2;
		}

		return $coffee;
	}

	public function calculateDocument() {
		$document = $this->document;

		if ($this->leader) {
			$document = 0;
		}

		return $document;
	}
}
?>