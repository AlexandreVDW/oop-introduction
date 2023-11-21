<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
        echo $cola->getInfo() . PHP_EOL;
    
        // Print the temperature on the screen
        echo "Temperature: " . $cola->temperature . PHP_EOL;

class Beer extends Beverage
{
    // Additional properties with type hinting
    public string $name;
    public float $alcoholPercentage;

    // Constructor that sets the values for name and alcohol percentage
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        // Call the parent constructor to set color, price, and temperature
        parent::__construct($color, $price, $temperature);

        // Set the additional properties specific to Beer
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Additional Method with type hinting
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}

// Instantiate an object which represents Duvel
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// Print the getAlcoholPercentage on the screen in two different ways
echo "Alcohol Percentage: " . $duvel->getAlcoholPercentage() . "<br>";
echo "Alcohol Percentage (alternative): " . $duvel->alcoholPercentage . "<br>";

// Print the color on the screen
echo "Color: " . $duvel->color . "<br>";

// Print the getInfo on the screen
echo $duvel->getInfo() . "<br>";

// Try to get an error by calling an undefined method
// This line will cause a Fatal error
//$cola->getAlcoholPercentage();  // Uncommenting this line will result in an error
?>
