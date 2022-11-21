<?php

class Car
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }

}

$camry = new Car('Camry', 'Red');

echo $camry->get_name(); // Camry
echo '<br>';
echo $camry->get_color(); // Red

echo '<br>';

$mercedes = new Car('Mercedes', 'Blue');

echo $mercedes->get_name(); // mercedes
echo '<br>';
echo $mercedes->get_color(); // Red



?>