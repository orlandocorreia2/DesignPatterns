<?php
require 'Employee.php';
require 'Teacher.php';

$employee = new Employee();
$employee->name = 'Orlando';

$employee->working();
echo '<br/>';

$teacher = new Teacher();
// $teacher->name = 'Sarah';

$teacher->teaching();

echo '<br/>';



