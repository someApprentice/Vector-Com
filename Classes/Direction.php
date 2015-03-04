<?php
class Direction {
	public $departments = array();

	public function returnEmployeesByType($type) {
		$listEmployeesType = array();

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($Employee->name == $type and $Employee->leader == false) {
					$listEmployeesType[] = $Employee;
				}
			}
		}

		return $listEmployeesType;
	}

	public function dismissEmployyes($list, $type) {
		$totalEmployyesType = count($list);

		$procent = round((($totalEmployyesType / 100) * 40), 0, PHP_ROUND_HALF_UP);

		$i = 0;

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == $procent) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->leader == false and $Employee->rang == 1) {
					$Department->unsetEmployee($employeekey);

					$i++;
				}
			}
		}

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == $procent) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->leader == false and $Employee->rang == 2) {
					$Department->unsetEmployee($employeekey);

					$i++;
				}
			}
		}

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == $procent) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->leader == false and $Employee->rang == 3) {
					$Department->unsetEmployee($employeekey);

					$i++;
				}
			}
		}

		return true;
	}

	public function setSolaryToEmpoyeesType($type, $newSolary) {
		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($Employee->name == $type) {
					$Employee->solary = $newSolary;
				}
			}
		}

		return true;
	}

	public function setCoffeToEmpoyeesType($type, $newCoffe) {
		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($Employee->name == $type) {
					$Employee->coffe = $newCoffe;
				}
			}
		}

		return true;
	}

	public function setToLeader($type) {
		$i = 0;

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($Employee->leader == true) {
					$Employee->leader = false;
				}
			}
		}


		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == 1) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->rang = 3) {
					$Employee->leader = true;

					$i = 1;
				}
			}
		}


		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == 1) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->rang = 2) {
					$Employee->leader = true;

					$i = 1;
				}
			}
		}

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == 1) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->rang = 1) {
					$Employee->leader = true;

					$i = 1;
				}
			}
		}

		return true;
	}

	public function increaseEmployees($list, $type) {
		$totalEmployyesType = count($list);

		$procent = round((($totalEmployyesType / 100) * 50), 0, PHP_ROUND_HALF_UP);

		$i = 0;

		foreach ($this->departments as $departmentkey => $Department) {
			foreach ($Department->employees as $employeekey => $Employee) {
				if ($i == $procent) {
					break;

					return true;
				}

				if ($Employee->name == $type and $Employee->rang != 3) {
					$Employee->rang++;

					$i++;
				}
			}
		}
	}
}