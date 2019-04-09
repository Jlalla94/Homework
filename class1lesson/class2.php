<?php

class Engine
{
    /**
     * @var array $fuelTypes
     *
     */
    protected $fuelTypes; //diesel propan gas electro

    /**
     * @var int $power
     */
    protected $power; //hp

    /**
     * @param  string $type
     *
     * @return Engine
     */
    public function addFuelType(string $type)
    {
        $this->fuelTypes[] = $type;
        return $this;

    }

    /**
     * @param  int $power
     *
     * @return Engine
     */
    public function setPower(int $power)
    {
        $this->power = $power;
        return $this;

    }
    public function getPower()
    {
        return $this->power;
    }
}

abstract class MotoTechnics
{   
    protected $weight = 0;
    protected $engine;
    protected $price;
    private $model;

    public function getPrice(){

        echo "Price  is " . $this->price;
        return $this->price;
    }

    public function setPrice($price){

        $this->price = $price;
        return $this;
    }
    public function setEngin($engine){

        if((!is_object($engine))&&(is_subclass_of($this->engine, "Engine")))
            return print ("please set engine from class engin and try one more time...");
        $this->engine = $engine;
        return $this;
    }

    public function getEngin(){

        return $this->engine;
    }

    public function setWeight($weight){

        $this->weight = $weight;
        return $this;
    }

    public function getWeight(){

        if ($this->weight > 0)
            return $this->weight;
        return false;
    }
    public function setModel($model){
        
        $this->model=$model;
        return $this;
    }

    public function getModel(){

        echo "Model of " . strtolower(get_class($this)) . " is " . $this->model;
        return $this->model;
    }
}

abstract class MotoTechnicOnWheels extends MotoTechnics 
{
    
    private $wheeleds;
    
    public function setCountWheels($weight){

        $this->weight=$weight;
        return $this;
    }


    public function getCountWheels(){

        return $this->wheeleds;
    }
    
}

abstract class OnlyWoterMotoTechnic extends MotoTechnics
{

    protected $wheeleds = "no wheels it stay on water";
    
    public function getCountWheels(){

        return $this->wheeleds;
    }
}
class Scooter extends OnlyWoterMotoTechnic
{

}

class Motorcycle extends MotoTechnicOnWheels
{
    
    private $wheeleds = 2;
}

class Quadbike extends MotoTechnicOnWheels
{
    
    private $wheeleds = 4;
}

interface SpeedTest 
{

    public function TestDrive($object);

}
class TestMotoTechnicOnEarth implements SpeedTest
{

    public function TestDrive($object){

        if ($object->getCountWheels() == "no wheels it stay on water")
            return print ($object->getEngin()->getPower() * 10  . " point of speed test");
        elseif(is_int($object->getCountWheels()))
            return print ($object->getEngin()->getPower() * $object->getCountWheels()  . " point of speed test");
        else 
            return print ("bad gatway");
    }
}


$engineTipeOne = new Engine();

$engineTipeOne->setPower(102);

$scooterOne = new Scooter();

$scooterOne->setEngin($engineTipeOne);

$firstTest = new TestMotoTechnicOnEarth();

$firstTest->TestDrive($scooterOne);
