<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
	private int $loading = 0;

	private int $storageCapacity = 0;

	public function __construct(string $color, int $nbSeats, int $loading, int $storageCapacity)
	{
		parent::__construct($color, $nbSeats);
		$this->setLoading($loading);
		$this->setStorageCapacity($storageCapacity);
	}

	public function getLoading(): int
	{
		return $this->loading;
	}

	public function setLoading(int $loading): void
	{
		$this->loading = $loading;
	}

	public function getStorageCapacity(): int
	{
		return $this->storageCapacity;
	}

	public function setStorageCapacity(int $storageCapacity): void
	{
		$this->storageCapacity = $storageCapacity;
	}

	public function is_full(): string
	{
		$result = 'in filling';
		if ($this->getLoading() === $this->getStorageCapacity()) {
			$result = 'full';
		}

		return $result;
	}
}