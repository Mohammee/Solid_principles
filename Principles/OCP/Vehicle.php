<?php

namespace SOLID\OCP;

abstract class Vehicle
{

    /**
     * @var Moveable
     */
    private $moveable;

    /**
     * @var string
     */
    private $color;

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
    private $routes = [];

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
     * @return int
     */
    public function getMaximumSpeed(): int
    {
        return $this->maximumSpeed;
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
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
        $this->routes = array_merge($this->routes ?? [], $routes);
    }

    /**
     * @return Moveable
     */
    public function getMoveable(): Moveable
    {
        return $this->moveable;
    }

    /**
     * @param Moveable $moveable
     */
    public function setMoveable(Moveable $moveable): void
    {
        $this->moveable = $moveable;
    }

    /**
     * @return string
     */
    public function move()
    {
        return $this->getMoveable()->move();
    }
}