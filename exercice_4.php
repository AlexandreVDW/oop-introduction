<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Beverage 
{
    protected string $color;        // Changed: Made property protected
    protected float $price;         // Changed: Made property protected
    protected string $temperature;  // Changed: Made property protected
    
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

    public function getColor(): string
    {
        return $this->color;
    }
}

class Beer extends Beverage
{
    protected string $name;            // Changed: Made property protected
    protected float $alcoholPercentage; // Changed: Made property protected

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);

        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
    }

    public function printBeerInfo(): void
    {
        echo $this->beerInfo() . "<br>";
    }

    public function setColor(string $newColor): void
    {
        $this->color = $newColor;
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// Error here due to accessing protected property directly
// echo "Alcohol Percentage: " . $duvel->alcoholPercentage . "<br>";

// Error here due to accessing protected property directly
// echo "Color: " . $duvel->color . "<br>";

echo $duvel->getInfo() . "<br>";

$duvel->setColor("light");

// Error here due to accessing protected property directly
// echo "New Color: " . $duvel->color . "<br>";

$duvel->printBeerInfo();
?>
