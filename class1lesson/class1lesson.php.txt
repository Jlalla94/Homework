<?php
class Animal {

	private  $name = "кошка";

	public function get_name(){
		return $this->name . "\n";
	}
}
class Mleca extends Animal {
	private $from = "Дом";
	
	public function get_from(){
		return $this->from . "\n";
		}
}	

class Cat extends Mleca {
	private $clichka = "HeTy";
	
	public function getclichka()
    {
        return $this->clichka;
    }
     
    public function setclichka($Cname)
    {
        $this->clichka = $Cname;
    } 

} 

$cat = new Cat;
$cat->setclichka("Барсик");
echo $cat->get_name() . ' ' . $cat->get_from() . ' ' . $cat->getclichka();