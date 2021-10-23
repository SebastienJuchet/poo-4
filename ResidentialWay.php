<?php


final class ResidentialWay extends HighWay
{

	public function addVehicle(Vehicle $vehicle)
	{
		if (is_subclass_of($vehicle, 'Vehicle')) {
			$this->setCurrentVehicles([$vehicle]);
		}
	}
}