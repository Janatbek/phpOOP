<?php

class Deck{
	public $standardCards = array(); 
	public $faces = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	public $values = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
	
	public function makeAdeck() {
		foreach ($this->faces as $face) {
			foreach ($this->values as $value) {
				//var_dump($face);
				$this->standardCards[] = array("face" => $face, "value" => $value);
			}		
		}
		return $this->standardCards;
	}

	public function __construct(){
		$this->standardCards = $this->makeAdeck();
	}

}
$test = new Deck();
//var_dump($test->standardCards);
//var_dump($test);
//end of creting fase of Decl class.

function shuffling($test){
	shuffle($test);
	foreach ($test as $value) {
		echo "jan";
	}
}
shuffling($test->standartCards);

//=====================================
	//shuffling
	// $numbers = range(1, 52);
	// 	shuffle($numbers);
	// 	foreach ($numbers as $number) {
 //    	echo "$number ";
	// 	}	
?>