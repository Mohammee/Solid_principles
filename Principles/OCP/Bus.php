<?php
namespace SOLID\OCP;

class Bus implements IVehicle
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
     * @var int
     */
    private $doors;


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
     * @param string $from
     * @param string $to
     * @return string
     */
    public function dirveToRoute(string $from, string $to) : string
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
        return 'Iam moving in tunnels.';
    }
}
