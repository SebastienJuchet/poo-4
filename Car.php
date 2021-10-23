<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
	private string $energy;

	private int $energyLevel;

	private bool $hasParkBrake = true;

	public const ALLOWED_ENERGY = [
		'fuel',
		'electric',
	];

	public function __construct(string $color, int $nbSeats, string $energy)
	{
		parent::__construct($color, $nbSeats);
		$this->setEnergy($energy);
	}

	public function start()
	{
		if ($this->hasParkBrake) {
			throw new Exception('Pense à enlever le frein à main');
		}
		echo 'Vroommm!!!';
	}

	public function setParkBrake()
	{
		$this->hasParkBrake = !$this->hasParkBrake;
	}

	public function getParkBrake(): bool
	{
		return $this->hasParkBrake;
	}

	public function getEnergy(): string
	{
		return $this->energy;
	}

	public function setEnergy(string $energy): Car
	{
		if (in_array($energy, self::ALLOWED_ENERGY)) {
			$this->energy = $energy;
		}

		return $this;
	}

	public function getEnergyLevel(): int
	{
		return $this->energyLevel;
	}

	public function setEnergyLevel(int $energyLevel): void
	{
		$this->energyLevel = $energyLevel;
	}
}
