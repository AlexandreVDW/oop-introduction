<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Beverage 
{
    // The Properties
    private string $color;
    private float $price;
    private string $temperature;

    // Static property
    private static string $address = "Melkmarkt 9, 2000 Antwerpen";
    
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

    // Getter for temperature
    public function getTemperature(): string
    {
        return $this->temperature;
    }

    // Getter for color
    public function getColor(): string
    {
        return $this->color;
    }

    // Static method to get the address
    public static function getAddress(): string
    {
        return self::$address;
    }
}

// Print the address without creating a new instance of the Beverage class (1st way)
echo "Address (1st way): " . Beverage::getAddress() . "<br>";

// Instantiate an object which represents cola
$cola = new Beverage("black", 2.0);

// Print the getInfo on the screen
echo $cola->getInfo() . "<br>";

// Print the temperature on the screen using the getter method
echo "Temperature: " . $cola->getTemperature() . "<br>";

class Beer extends Beverage
{
    // Additional properties with type hinting
    private string $name;
    private float $alcoholPercentage;

    // Constant for Beer class
    const BAR_NAME = 'Het Vervolg';

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

    // Function to use the constant
    public function getBarName(): string
    {
    return static::BAR_NAME;
    }
}

// Instantiate an object which represents Duvel
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// Print the getAlcoholPercentage on the screen using the method
echo "Alcohol Percentage: " . $duvel->getAlcoholPercentage() . "<br>";

// Print the color on the screen using the getter method from the parent class
echo "Color: " . $duvel->getColor() . "<br>";

// Print the getInfo on the screen
echo $duvel->getInfo() . "<br>";

// Print the constant on the screen
echo "Bar Name: " . $duvel->getBarName() . "<br>";

// Print the address without creating a new instance of the Beverage class (2nd way)
echo "Address (2nd way): " . Beverage::getAddress() . "<br>";
?>
