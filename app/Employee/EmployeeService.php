<?php

namespace App\Employee;
use App\Employee;

class EmployeeService 
{
    public function createEmployee(array $attributes)
    {
        $employee = Employee::create($attributes);
    }
}
