<?php
class Employee {
	private $name;

	private $rang;
	private $salary;
	private $coffee;
	private $document;
	private $leader;

	public function __construct($name, $salary, $coffee, $document, $rang = 1, $leader = false) {
		$this->name = $name;
		$this->salary = $salary;
		$this->coffee = $coffee;
		$this->document = $document;
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
		return $this->name;
	}

	public function getRang() {
		return $this->rang;
	}

	public function getSalary() {
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

	public function getLeader() {
		return $this->leader;
	}
}
?>