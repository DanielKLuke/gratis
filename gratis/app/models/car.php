<?php

//THIS CLASS ACCESSES THE DATA FILE CONTAINING THE INVENTORY INFORMATION
class car
{
    protected static $data_file;
    protected $car = [];

    public function __construct()
    {
        self::$data_file = DATA . 'cars.txt';
    }
    //LOAD ONE CAR'S INFORMATION BASED ON STOCKNUMBER WHICH IS PASSED IN THE URL
    private function load($stockNumber)
    {
        if (file_exists(DATA . 'cars.txt')) {
            $carArray = file(DATA . 'cars.txt');
            foreach ($carArray as $car) {
                $testArray = explode(', ', $car);
                if ($testArray[7] == $stockNumber) {
                    $this->car = $testArray;
                }
            }
        }
    }
    //RETURN ONE CAR'S INFORMATION
    public function getCarInfo($stockNumber)
    {
        $this->load($stockNumber);
        return $this->car;
    }
}
