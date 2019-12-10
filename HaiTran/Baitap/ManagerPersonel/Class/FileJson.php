<?php


class FileJson
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function readFileJson()
    {
        $arr = [];
        $dataJson = file_get_contents($this->path);
        $arr = json_decode($dataJson);
        return $arr;
    }

    public function putFileJson($arr)
    {
        $arr_json = json_encode($arr);
        file_put_contents($this->path,$arr_json);
    }

}