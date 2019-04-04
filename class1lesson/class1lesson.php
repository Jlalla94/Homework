<?php
class Animal {

	private  $name = "cat";

	public function get_name(){
		return $this->name . "\n";
	}
}
class Mleca extends Animal {
	private $from = "Home";
	
	public function get_from(){
		return $this->from . "\n";
		}
}	

class Cat extends Mleca {
	private $clichka = "none";
	
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