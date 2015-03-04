<?php
//Депортамент закупок
$procurement = new Department('Procurement');

//Создаем 9 менеджеров 1 ранга. Пользуюсь циклом только потому что мне лень делать это вручную...
for ($i = 0; $i < 9; $i++) {
	$procurement->addEmployee(new Employee('manager', 500, 20, 200));
}

for ($i = 0; $i < 3; $i++) {
	$procurement->addEmployee(new Employee('manager', 500, 20, 200, 2));
}

for ($i = 0; $i < 2; $i++) {
	$procurement->addEmployee(new Employee('manager', 500, 20, 200, 3));
}

for ($i = 0; $i < 2; $i++) {
	$procurement->addEmployee(new Employee('marketer', 400, 15, 150));
}

$procurement->addEmployee(new Employee('manager', 400, 15, 150, 2, true));


//Депортамент продаж
$sales = new Department('Sales');

for ($i = 0; $i < 12; $i++) {
	$sales->addEmployee(new Employee('manager', 500, 20, 200));
}

for ($i = 0; $i < 6; $i++) {
	$sales->addEmployee(new Employee('marketer', 400, 15, 150));
}

for ($i = 0; $i < 3; $i++) {
	$sales->addEmployee(new Employee('analyst', 800, 50, 5));
}

for ($i = 0; $i < 2; $i++) {
	$sales->addEmployee(new Employee('analyst', 80, 50, 5, 2));
}

$sales->addEmployee(new Employee('manager', 500, 20, 200, 2, true));


//Департамент рекламы
$advertising = new Department('Advertising');

for ($i = 0; $i < 15; $i++) {
	$advertising->addEmployee(new Employee('marketer', 400, 15, 150));
}

for ($i = 0; $i < 10; $i++) {
	$advertising->addEmployee(new Employee('marketer', 400, 15, 150, 2));
}

for ($i = 0; $i < 8; $i++) {
	$advertising->addEmployee(new Employee('manager', 500, 20, 200));
}

for ($i = 0; $i < 8; $i++) {
	$advertising->addEmployee(new Employee('engineer', 200, 5, 50));
}

$advertising->addEmployee(new Employee('marketer', 400, 15, 150, 3, true));


//Департамент логистики
$logistics = new Department('Logistics');

for ($i = 0; $i < 13; $i++) {
	$logistics->addEmployee(new Employee('manager', 500, 20, 200));
}

for ($i = 0; $i < 5; $i++) {
	$logistics->addEmployee(new Employee('manager', 500, 20, 200, 2));
}

for ($i = 0; $i < 5; $i++) {
	$logistics->addEmployee(new Employee('engineer', 200, 5, 50));
}

$logistics->addEmployee(new Employee('manager', 500, 20, 200, 1, true));
?>