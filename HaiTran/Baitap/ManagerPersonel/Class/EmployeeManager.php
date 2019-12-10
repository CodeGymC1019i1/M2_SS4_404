<?php

include_once "FileJson.php";

class EmployeeManager
{
    private $fileJson;
    public function __construct($path)
    {
       $this->fileJson = new FileJson($path);

    }

    public function add($employee)
    {
        $arr = $this->fileJson->readFileJson();
        array_push($arr, $employee);
        $this->fileJson->putFileJson($arr);
    }

    public function delete($index)
    {
        $arr = $this->fileJson->readFileJson();
        array_splice($arr ,$index,1);
        $this->fileJson->putFileJson($arr);
    }

    public function edit($index, $employee)
    {
        $arr = $this->fileJson->readFileJson();
        $arr[$index] = $employee;
        $this->fileJson->putFileJson($arr);
    }

    public function search($keyword)
    {
        $employees = $this->fileJson->readFileJson();
        if (empty($keyword))
            return $employees;
        else {
            $keyword = strtolower($keyword);
            $resultSearch = [];
            foreach ($employees as $index => $employee) {
                var_dump($keyword, $employee->position);
                if (is_numeric(strpos($employee->firstName,$keyword)) || is_numeric(strpos($employee->lastName,$keyword))
                    || is_numeric(strpos($employee->birthDay,$keyword)) || is_numeric(strpos($employee->address,$keyword))
                    || is_numeric(strpos($employee->position,$keyword)) ) {
                    array_push($resultSearch,$employee);
                    continue;
                }
            }
        }
        return $resultSearch;

    }
}