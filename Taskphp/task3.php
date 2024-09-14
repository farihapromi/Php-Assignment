<?php
class Employee
{
    private $id;
    private $name;
    private $salary;
    public function setId($id)
    {

        $this->id = $id;
    }
    public function setName($name)
    {

        $this->name = $name;
    }


    public function setSalary($salary)
    {

        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
$employee = new Employee();
$employee->setSalary(4000);
echo "Employee Salary is" . $employee->getSalary() . "/n";

?>