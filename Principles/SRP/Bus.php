<?php
namespace SOLID\SRP;


use http\Encoding\Stream\Inflate;

class Bus
{

    /**
     * @var int
     */
    private $busNumber;

    /**
     * @var int
     */
    private $numberOfPassengers;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $doors;

    /**
     * @var int
     */
    private $maximumSpeed;

    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $routes;

    /**
     * Bus constructor.
     * @param $busNumber
     */
    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . ' km/h';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route $routes
     */
    public function addRoute(Route ...$routes): void
    {
        $this->routes = array_merge($this->routes ?? [] , $routes);
    }

    /**
     * @param string $from
     * @param string $to
     * @return string
     */
    public function dirveToRoute(string $from , string $to) : string
    {
        return "The Bus moving form {$from} to {$to}.";
    }

    /**
     * @return string
     */
    public function doMaintenance() : string
    {
        return "The bus do maintenance now.";
    }

    /**
     * @return string
     */
    public function move() : string
    {
        $output = '';
        foreach($this->routes as $route){
           $output .= "<p>The bus move from {$route->getSource()} to {$route->getDestination()}
                  At maximum speed {$this->getMaximumSpeed()}
                  by dirver {$this->getDriver()->getName()}</p>";
        }
        return $output;
    }


}