<?php
class Direction {
	public $departments = array();

	public function getEmployeesType($employees, $type, $leader = false) {
		$array = array();

		$array = array_filter($employees, function($f) use ($type, $leader) {
				return ($f->getName() == $type) and ($f->getLeader() == $leader);
		});

		return $array;
	}

	public function getEmployeesTypeByRang($employees, $type, $leader = false) {
		$array = array();

		$array = array_filter($employees, function($f) use ($type, $leader) {
				return ($f->getName() == $type) and ($f->getRang() != 3);
		});

		return $array;
	}

	public function getLeader($employees) {
		$array = array();

		$array = array_filter($employees, function($f) {
				return $f->getLeader() == true;
		});

		return $array;
	}

	public function dismissEmployees($type) {
		foreach ($this->departments as $department) {
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesType($employees, $type);

			$totalEmployeesType = count($filteredEmployees); 

			if ($totalEmployeesType == 0) {
				continue;
			}
			
			$percent = ceil(($totalEmployeesType / 100) * 40);

			usort($filteredEmployees, function($a, $b) {
				if ($a->getRang() == $b->getRang()) {
					return 0;
				}
		
				return ($a->getRang() < $b->getRang()) ? -1 : 1;
			});

			$focusEmployees = array_slice($filteredEmployees, 0, $percent);

			foreach ($focusEmployees as $employee) {
				$department->fireEmployee($employee);
			}
		}
	}

	public function setSolary($type, $salary) { 
		foreach ($this->departments as $department) { //Здесь идет очень много копипасты, и я не могу сообразить как с ней бороться, 
													//потому что сотруднков мы получаем из конкретного депортамента, который мы получаем из цикла.
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesType($employees, $type);

			if (count($filteredEmployees) == 0) {
				continue;
			}

			foreach ($filteredEmployees as $employee) {
				$employee->setSalary($salary);
			}
		}
	}

	public function setCoffee($type, $coffe) { 
		foreach ($this->departments as $department) { //Здесь идет очень много копипасты, и я не могу сообразить как с ней бороться, 
													//потому что сотруднков мы получаем из конкретного депортамента, который мы получаем из цикла.
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesType($employees, $type);

			if (count($filteredEmployees) == 0) {
				continue;
			}

			foreach ($filteredEmployees as $employee) {
				$employee->setCoffee($coffe);
			}
		}
	}

	public function setLeader($type) {
		foreach ($this->departments as $department) { //Здесь идет очень много копипасты, и я не могу сообразить как с ней бороться, 
													//потому что сотруднков мы получаем из конкретного депортамента, который мы получаем из цикла.
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesType($employees, $type);

			if (count($filteredEmployees) == 0) {
				continue;
			}

			$leader = reset($this->getLeader($employees));

			$leader->setLeader(false);

			usort($filteredEmployees, function($a, $b) {
				if ($a->getRang() == $b->getRang()) {
					return 0;
				}
		
				return ($a->getRang() > $b->getRang()) ? -1 : 1;
			});

			$newLeader = reset($filteredEmployees);

			$newLeader->setLeader(true);
		}
	}

	public function increaseEmployees($type) {
		foreach ($this->departments as $department) { //Здесь идет очень много копипасты, и я не могу сообразить как с ней бороться, 
													//потому что сотруднков мы получаем из конкретного депортамента, который мы получаем из цикла.
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesTypeByRang($employees, $type);

			$totalEmployeesType = count($filteredEmployees);

			if ($totalEmployeesType == 0) {
				continue;
			}

			$percent = ceil(($totalEmployeesType / 100) * 50);


			$focusEmployees = array_slice($filteredEmployees, 0, $percent);

			foreach ($focusEmployees as $employee) {
				$newRang = $employee->getRang() + 1;

				$employee->setRang($newRang);
			}
		}
	}
}