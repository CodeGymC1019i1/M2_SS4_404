<?php

class EmployeeManager
{
    private $path;

    public function __construct()
    {
       $this->path = 'Employees.json';

    }

    public function addEmployee($employee)
    {
        $arr = $this->readFileJson();
        array_push($arr, $employee);
        $this->putFileJson($arr);
    }

    public function deleteEmployee($index)
    {
        $arr = $this->readFileJson();
        array_splice($arr ,$index,1);
        $this->putFileJson($arr);
    }

    public function editEmployee($index, $employee)
    {
        $arr = $this->readFileJson();
        $arr[$index] = $employee;
        $this->putFileJson($arr);
    }

    /**
     * @return string
     */
    public function readFileJson()
    {
        $dataJson = file_get_contents($this->path);
        $arr = json_decode($dataJson);
        return $arr;
    }

    public function putFileJson($arr)
    {
        $arr_json = json_encode($arr);
        file_put_contents($this->path,$arr_json);
    }

    public function displayEmployees()
    {

    }

    public function displayInfoEmployee()
    {

    }
}