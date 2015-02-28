<?php
require_once '/../autoload.php';
?>

<?php
class Employee {
	public $name;

	public $rang;
	public $solary;
	public $coffe;
	public $document;
	public $leader;

	public function __construct($name, $solary, $coffe, $document, $rang = 1, $leader = false) {
		$this->name = $name;
		$this->solary = $solary;
		$this->coffe = $coffe;
		$this->document = $document;
		$this->rang = $rang;
		$this->leader = $leader;

		$this->solary = $this->calculateSolary();
		$this->coffe  = $this->calculateCoffe();
		$this->document = $this->calculateDocument();
	}

	public function calculateSolary() {
		switch ($this->rang) {
			case 1:
				$solary = $this->solary; //Хотелось бы услышать твое мнение по поводу того, что я использую такое же имя переменной как и у свойства. Не приведт ли это к путанице?
			break;

			case 2:
				$solary = $this->solary + ($this->solary * 0.25);
			break;

			case 3:
				$solary = $this->solary + ($this->solary * 0.50);
			break;
		}
 
		if ($this->leader) {
			$solary = $solary + ($solary * 0.50);
		}
 
		return $solary;
	}

	public function calculateCoffe() {
		if ($this->leader) {
			$coffe = $this->coffe * 2;
		}

		return $coffe;
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