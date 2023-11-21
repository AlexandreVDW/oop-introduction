<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Beverage 
{
    private string $color;
    private float $price;
    private string $temperature;
    
    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    // Public getter method for color
    public function getColor(): string
    {
        return $this->color;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);

        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
    }

    // Public method to print the beerInfo
    public function printBeerInfo(): void
    {
        echo $this->beerInfo() . "<br>";
    }

    // Public method to change the color
    public function setColor(string $newColor): void
    {
        $this->color = $newColor;
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo "Alcohol Percentage: " . $duvel->getAlcoholPercentage() . "<br>";

// This line will result in an error since getColor is now private
// echo "Color: " . $duvel->color . "<br>";

// Use the public getter method to access the color
echo $duvel->getInfo() . "<br>";

// Change the color of Duvel to light
$duvel->setColor("light");

// Print the new color on the screen
echo "New Color: " . $duvel->getColor() . "<br>";

// Print the beerInfo method on the screen
$duvel->printBeerInfo();
?>
