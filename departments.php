<?php
//Депортамент закупок
$procurement = new Department('Procurement');

//Создаем 9 менеджеров 1 ранга. Пользуюсь циклом только потому что мне лень делать это вручную...
for ($i = 0; $i < 9; $i++) {
	$procurement->addEmployee(new Manager());
}

for ($i = 0; $i < 3; $i++) {
	$procurement->addEmployee(new Manager(2));
}

for ($i = 0; $i < 2; $i++) {
	$procurement->addEmployee(new Manager(3));
}

for ($i = 0; $i < 2; $i++) {
	$procurement->addEmployee(new Marketer());
}

$procurement->addEmployee(new Manager(2, true));


//Департамент продаж
$sales = new Department('Sales');

for ($i = 0; $i < 12; $i++) {
	$sales->addEmployee(new Manager());
}

for ($i = 0; $i < 6; $i++) {
	$sales->addEmployee(new Marketer());
}

for ($i = 0; $i < 3; $i++) {
	$sales->addEmployee(new Analyst());
}

for ($i = 0; $i < 2; $i++) {
	$sales->addEmployee(new Analyst(2));
}

$sales->addEmployee(new Manager(2, true));


//Департамент рекламы
$advertising = new Department('Advertising');

for ($i = 0; $i < 15; $i++) {
	$advertising->addEmployee(new Marketer());
}

for ($i = 0; $i < 10; $i++) {
	$advertising->addEmployee(new Marketer(2));
}

for ($i = 0; $i < 8; $i++) {
	$advertising->addEmployee(new Manager());
}

for ($i = 0; $i < 8; $i++) {
	$advertising->addEmployee(new Engineer());
}

$advertising->addEmployee(new Marketer(3, true));


//Департамент логистики
$logistics = new Department('Logistics');

for ($i = 0; $i < 13; $i++) {
	$logistics->addEmployee(new Manager());
}

for ($i = 0; $i < 5; $i++) {
	$logistics->addEmployee(new Manager(2));
}

for ($i = 0; $i < 5; $i++) {
	$logistics->addEmployee(new Engineer());
}

$logistics->addEmployee(new Manager(1, true));