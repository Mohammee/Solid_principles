<?php

namespace SOLID\OCP;

class Trip
{

    /**
     * @var IVehicle
     */
    private $vehicle;

    /**
     * @var int
     */
    private $tripNumber;

    /**
     * @var float
     */
    private $tripPrice;

    /**
     * @var int
     */
    private $duration;

    /**
     * Trip constructor.
     * @param IVehicle $vehicle
     * @param int $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(IVehicle $vehicle, int $tripNumber, float $tripPrice, int $duration)
    {
        $this->vehicle = $vehicle;
        $this->tripNumber = $tripNumber;
        $this->tripPrice = $tripPrice;
        $this->duration = $duration;
    }

    /**
     * @return IVehicle
     */
    public function getIVehicle(): IVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param IVehicle $vehicle
     */
    public function setIVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return int
     */
    public function getTripNumber(): int
    {
        return $this->tripNumber;
    }

    /**
     * @param int $tripNumber
     */
    public function setTripNumber(int $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return float
     */
    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    /**
     * @param float $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function move(): string
    {
        return $this->vehicle->move();
    }
}
