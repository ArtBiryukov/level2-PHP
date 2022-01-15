<?php

interface IDB
{
    /**
     *
     * @param string $sql
     * @return mixed
     */
    public function find(string $sql);

    /**
     * @param string $sql
     * @return mixed
     */
    public function findAll(string $sql);
    public function insert();
}