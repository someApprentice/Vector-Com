<?php
class Direction {
	public $departments = array();

	public function getEmployeesType($employees, $type, $leader = false) {
		$EmployeesType = array_filter($employees, function($f) use ($type, $leader) {
				return ($f->getName() == $type) and ($f->getLeader() == $leader);
		});

		return $EmployeesType;
	}

	public function getEmployeesTypeByRang($employees, $type) {
		$EmployeesTypeByRang = array_filter($employees, function($f) use ($type) {
				return ($f->getName() == $type) and ($f->getRang() != 3);
		});

		return $EmployeesTypeByRang;
	}

	public function findAndProcessWorkers($employees, callable $callback) {
		foreach ($employees as $employee) {
			$callback($employee);
		}
	}	

	public function firstAnticrisisMethod($type) { //Увольняем 40% инженеров в каждом департаменте
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

	public function secondAnticrisisMethod($type, $salary, $coffee) { //Повышаем зарплату и кофе определенному типу сотрудников и назначаем нового лидера наивысшего ранга этого же типа
		foreach ($this->departments as $department) {
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = $this->getEmployeesType($employees, $type);

			$this->findAndProcessWorkers($filteredEmployees, function($o) use($salary) {$o->setSalary($salary);}); //Меняем зарпалту
			$this->findAndProcessWorkers($filteredEmployees, function($o) use($coffee) {$o->setCoffee($coffee);}); //Меняем кофе
			
			$leader = reset($department->getLeader()); //И далее назначаем нового лидера

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

	public function thirdAnticrisisMethod($type) { //
		foreach ($this->departments as $department) {
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