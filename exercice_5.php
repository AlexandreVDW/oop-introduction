<?php

class Beverage 
{
    // The Properties
    private $color;
    private $price;
    private $temperature;
    
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
        return "This beverage is {$this->temperature} and {$this->color}. It costs {$this->price} euro.";
    }
}

// Instantiate an object which represents cola
$cola = new Beverage("black", 2.0);

// Print the getInfo on the screen
echo $cola->getInfo() . "<br>";

// Change the price by creating a new instance with the updated price
$cola = new Beverage("black", 3.5);

// Print the updated price on a new line
echo $cola->getInfo() . "<br>";

?>