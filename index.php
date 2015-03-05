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
   			<tr>
               <td><?=$procurement->name?></td>
               <td><?=$procurement->calculateEmployeesNumberInDepartment();?></td>
               <td><?=$procurement->calculateDepartmentTotalSalary();?></td>
               <td><?=$procurement->calculateDepartmentTotalCoffee();?></td>
               <td><?=$procurement->calculateDepartmentTotalDocument();?></td>
               <td><?=$procurement->calculateAvargeValue();?></td>
            </tr>
   			<tr><td><?=$sales->name?></td>
               <td><?=$sales->calculateEmployeesNumberInDepartment();?></td>
               <td><?=$sales->calculateDepartmentTotalSalary();?></td>
               <td><?=$sales->calculateDepartmentTotalCoffee();?></td>
               <td><?=$sales->calculateDepartmentTotalDocument();?></td>
               <td><?=$sales->calculateAvargeValue();?></td>
            </tr>
   			<tr>
               <td><?=$advertising->name?></td>
               <td><?=$advertising->calculateEmployeesNumberInDepartment();?></td>
               <td><?=$advertising->calculateDepartmentTotalSalary();?></td>
               <td><?=$advertising->calculateDepartmentTotalCoffee();?></td>
               <td><?=$advertising->calculateDepartmentTotalDocument();?></td>
               <td><?=$advertising->calculateAvargeValue();?></td>
            </tr>
   			<tr>
               <td><?=$logistics->name?></td>
               <td><?=$logistics->calculateEmployeesNumberInDepartment();?></td>
               <td><?=$logistics->calculateDepartmentTotalSalary();?></td>
               <td><?=$logistics->calculateDepartmentTotalCoffee();?></td>
               <td><?=$logistics->calculateDepartmentTotalDocument();?></td>
               <td><?=$logistics->calculateAvargeValue();?></td>
            </tr>   			
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
           <?php foreach ($direction->departments as $departmentkey => $Department) : ?>
              <?php foreach ($Department->employees as $employeekey => $Employee) : ?>
                  <tr>
                     <td><?=$Department->name?></td>
                     <td><?=$employeekey?></td>
                     <td><?=$Employee->name?></td>
                     <td><?=$Employee->rang?></td>
                     <td><?=$Employee->salary?></td>
                     <td><?=$Employee->coffee?></td>
                     <td><?=$Employee->document?></td>
                     <td><?=$Employee->leader?></td>
                  </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
         </table>
   </body>
</html>