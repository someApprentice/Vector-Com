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
   			<tr>
               <th>Департамент</th>
               <th>сотр.</th>
               <th>тугр.</th>
               <th>кофе</th>
               <th>стр.</th>
               <th>тугр./стр.</th>
            </tr>
   			

           <?php foreach ($direction->departments as $departmentkey => $department) : ?>
                  <tr>
                     <td><?=$department->name?></td>
                     <td><?=$department->calculateEmployeesNumberInDepartment();?></td>
                     <td><?=$department->calculateDepartmentTotalSalary();?></td>
                     <td><?=$department->calculateDepartmentTotalCoffee();?></td>
                     <td><?=$department->calculateDepartmentTotalDocument();?></td>
                     <td><?=$department->calculateAvargeValue();?></td>
                  </tr>
            <?php endforeach; ?>			
   		</table>

         <br>

         <table>
            <tr>
               <th>Департамент</th>
               <th>id</th>
               <th>Сотрудник</th>
               <th>Ранг</th>
               <th>Зарплата</th>
               <th>Кофе</th>
               <th>Документы</th>
               <th>Лидер</th>
            </tr>
           <?php foreach ($direction->departments as $departmentkey => $department) : ?>
              <?php foreach ($department->employees as $employeekey => $employee) : ?>
                  <tr>
                     <td><?=$department->getName()?></td>
                     <td><?=$employeekey?></td>
                     <td><?=$employee->getName()?></td>
                     <td><?=$employee->getRang()?></td>
                     <td><?=$employee->getSalary()?></td>
                     <td><?=$employee->getCoffee()?></td>
                     <td><?=$employee->getDocument()?></td>
                     <td><?=$employee->getLeader()?></td>
                  </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
         </table>
   </body>
</html>