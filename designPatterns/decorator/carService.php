<?php

interface CarService{
	public function getCost();
	public function getDesciption();
}

class BasicInspection implements CarService{
	public function getCost()
	{
		return 25;
	}

	public function getDesciption(){
		return 'Basic inspection';
	}
}

class OilChange implements CarService{
	protected $carService;

	public function __construct(CarService $carService){
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 15 + $this->carService->getCost();
	}
	public function getDesciption(){
		return $this->carService->getDesciption() . ' and  OilChange';
	}	
}

class TireRotation implements CarService{
	protected $carService;

	public function __construct(CarService $carService){
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 18 + $this->carService->getCost();
	}
	public function getDesciption(){
		return $this->carService->getDesciption() . ' and  TireRotation';
	}	
}

$carService = new TireRotation(new OilChange(new BasicInspection()));
echo $carService->getDesciption();
echo '<br>';
echo $carService->getCost();