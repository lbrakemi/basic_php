<?php

class Car
{
    public $name;
    public $color;

    const MESSAGE = ' Thank you for visiting our showroom';


    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_name()
    {
        return $this->name;
    }

    private function get_color()
    {
        return $this->color;
    }

    protected function show_color()
    {
        return $this->get_color();
    }

}

class Benz extends Car
{
    public $model;

    // Using model to override the construct variables
    function __construct($name, $color, $model)
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;

    }

    public function print_color()
    {
        return $this->show_color();
    }

    public function get_model()
    {
         return $this->model;
         
    }


}

$benz = new Benz('Mercedes Benz', 'Blue', 2023);

// This is the override the original model of the code
$benz->model = '2020';

echo 'The name of my car is ' . $benz->get_name() . ' and the color is ' . $benz->print_color() . ' while the model is ' . $benz->get_model(); 
echo '<br>';

echo Benz::MESSAGE;



// $benz = new Car("Mercedes Benz", "Green");

// echo' The name of my sport car is ' .$benz->get_name(). ' and i love it to be in ' .$benz->show_color()




?>