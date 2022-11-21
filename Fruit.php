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
$apple->set_color("Green"); 
echo "The name is." . $apple->get_name() ."<br>";
echo '<br>';
echo "The color is: ". $apple->get_color()."<br>";

echo '<br>';


$pinapple = new Fruit();
$pinapple->set_name("Pinapple");
$pinapple->set_color("Red");
echo 'The name is.' . $pinapple-> get_name()."<br>";
echo '<br>';
echo "The color is: ".$pinapple->get_color()."<br>";



?>