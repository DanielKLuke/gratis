<?php

//THIS CLASS ACCESSES THE DATA FILE CONTAINING THE INVENTORY INFORMATION
class inventory
{
    protected static $data_file;
    protected $inventory = [];

    public function __construct()
    {
        self::$data_file = DATA . 'cars.txt';
    }

    //LOADS THE DATA FILE
    private function load()
    {
        if (file_exists(DATA . 'cars.txt')) {
            $this->inventory = file(DATA . 'cars.txt');
        }
    }

    //RETURNS ALL CAR DATA
    public function getCars()
    {
        $this->load();
        return $this->inventory;
    }
}
