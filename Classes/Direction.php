<?php
class Direction {
	public $departments = array();

	public function getEmployeesType(array $employees, $type, $leader = false) {
		$EmployeesType = array_filter($employees, function($f) use ($type, $leader) {
				return ($f->getName() == $type) and ($f->isLeader() == $leader);
		});

		return $EmployeesType;
	}

	public function getEmployeesTypeByRang(array $employees, $type) {
		$EmployeesTypeByRang = array_filter($employees, function($f) use ($type) {
				return ($f->getName() == $type) and ($f->getRang() != 3);
		});

		return $EmployeesTypeByRang;
	}

	//Увольняем 40% инженеров в каждом департаменте
	public function firstAnticrisisMethod($type) { 
		foreach ($this->departments as $department) {
			$employees = iterator_to_array($department->getEmployees());

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

	//Повышаем зарплату и кофе определенному типу сотрудников и назначаем нового лидера наивысшего ранга этого же типа
	public function secondAnticrisisMethod($type, $salary, $coffee) { 
		foreach ($this->departments as $department) {
			$employees = iterator_to_array($department->getEmployees());
			
			$filteredEmployees = $this->getEmployeesType($employees, $type);

			if (empty($filteredEmployees)) {
				continue;
			}

			array_walk($filteredEmployees, function($o) use($salary) {$o->setSalary($salary);}); //Меняем зарпалту
			array_walk($filteredEmployees, function($o) use($coffee) {$o->setCoffee($coffee);}); //Меняем кофе
			
			usort($filteredEmployees, function($a, $b) {
				if ($a->getRang() == $b->getRang()) {
					return 0;
				}
		
				return ($a->getRang() > $b->getRang()) ? -1 : 1;
			});

			$newLeader = reset($filteredEmployees);

			$department->setLeader($newLeader);
		}
	}

	public function thirdAnticrisisMethod($type) {
		foreach ($this->departments as $department) {
			$employees = iterator_to_array($department->getEmployees());

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