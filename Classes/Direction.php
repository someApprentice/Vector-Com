<?php
class Direction {
	public $departments = array();

	public function dismissEmployees($type) {
		$filteredEmployees = array();

		foreach ($this->departments as $department) {
			$employees = $department->makeEmployeesArray();

			$filteredEmployees = array_filter($employees, function($f) use ($type) {
				return ($f->name == $type) and ($f->leader != true);
			});

			$totalEmployeesType = count($filteredEmployees); 

			if ($totalEmployeesType == 0) {
				continue;
			}
			
			$percent = ceil(($totalEmployeesType / 100) * 40);

			usort($filteredEmployees, function($a, $b) {
				if ($a->rang == $b->rang) {
					return 0;
				}
		
				return ($a->rang < $b->rang) ? -1 : 1;
			});

			$focusEmployees = array_slice($filteredEmployees, 0, $percent);

			foreach ($focusEmployees as $employee) {
				$department->unsetEmployee($employee);
			}
		}
	}
}