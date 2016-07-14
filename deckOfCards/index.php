<?php
	// 1. Function to have deck of cards:

	// function makeAdeck() {
	// 	$suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	// 	$values = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
	// 	$listOfCards = array();
	// 	$faces = array();
		
	// 	foreach ($suits as $suit) {
	// 		foreach ($values as $value) {
	// 			//var_dump($suit);
	// 			$listOfCards[] = array("suit" => $suit, "value" => $value);
				

	// 		}		
	// 	}
	// 	return $listOfCards;
	// 	//gave me back a deck of cards.
	// }
	// $deck = makeAdeck();

	

	// 2. Creating class Deck:

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
	}//end of creting fase of Decl class.
	
//=====================================
	//shuffling
	// $numbers = range(1, 52);
	// 	shuffle($numbers);
	// 	foreach ($numbers as $number) {
 //    	echo "$number ";
	// 	}	
?>