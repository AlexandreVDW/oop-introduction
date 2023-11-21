<?php

class Beverage 
{
    // The Properties
    public $color;
    public $price;
    public $temperature;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // The Method with type hinting
    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}
    // Instantiate an object which represents cola
    $cola = new Beverage("black", 2.0);

    // Print the getInfo on the screen
    echo $cola->getInfo() . "<br>";

    // Print the temperature on the screen
    echo "Temperature: " . $cola->temperature . "<br>";
?>