<?php
require_once 'autoload.php';
require_once 'departments.php';
require_once 'direction_copy3.php';
?>


<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   		<table>
   			<tr><th>Департамент</th><th>сотр.</th><th>тугр.</th><th>кофе</th><th>стр.</th><th>тугр./стр.</th></tr>
   			<tr><td><?=$procurement->name?></td><td><?=$procurement->calculateEmployeesNumberInDepartment();?></td><td><?=$procurement->calculateDepartmentTotalSolary();?></td><td><?=$procurement->calculateDepartmentTotalCoffe();?></td><td><?=$procurement->calculateDepartmentTotalDocument();?></td><td><?=$procurement->calculateAvargeValue();?></td></tr>
   			<tr><td><?=$sales->name?></td><td><?=$sales->calculateEmployeesNumberInDepartment();?></td><td><?=$sales->calculateDepartmentTotalSolary();?></td><td><?=$sales->calculateDepartmentTotalCoffe();?></td><td><?=$sales->calculateDepartmentTotalDocument();?></td><td><?=$sales->calculateAvargeValue();?></td></tr>
   			<tr><td><?=$advertising->name?></td><td><?=$advertising->calculateEmployeesNumberInDepartment();?></td><td><?=$advertising->calculateDepartmentTotalSolary();?></td><td><?=$advertising->calculateDepartmentTotalCoffe();?></td><td><?=$advertising->calculateDepartmentTotalDocument();?></td><td><?=$advertising->calculateAvargeValue();?></td></tr>
   			<tr><td><?=$logistics->name?></td><td><?=$logistics->calculateEmployeesNumberInDepartment();?></td><td><?=$logistics->calculateDepartmentTotalSolary();?></td><td><?=$logistics->calculateDepartmentTotalCoffe();?></td><td><?=$logistics->calculateDepartmentTotalDocument();?></td><td><?=$logistics->calculateAvargeValue();?></td></tr>   			
   		</table>
   </body>
</html>