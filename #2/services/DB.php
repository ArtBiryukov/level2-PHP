<?php

class DB implements ICalcRows, ICalcRows2, IDB
{
    use TCalcRows;
    public function find(string $sql)
    {
        return $sql . " find";
    }

    public function findAll(string $sql)
    {
        return $sql. " findAll";
    }


    public function insert()
    {
        // TODO: Implement insert() method.
    }
}