<?php


class Fruit
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }

}

$apple = new Fruit();
$apple->set_name("Apple"); 
echo $apple->get_name() ."<br>";


$pinapple = new Fruit();
$pinapple->set_name("Pinapple");
echo $pinapple-> get_name()."<br>";

$green = new Fruit();
$green->set_color("Green");
echo $green-> get_color();

?>