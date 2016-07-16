<?php

class Deck{
	public $faces = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	public $values = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
	public $standardCards;
	public $dealt;
	 
	public function __construct(){
		$this->standardCards = $this->makeAdeck();
	}
	public function makeAdeck() {
		$standardCards = array();
		foreach ($this->faces as $face) {
			foreach ($this->values as $value) {
				$standardCards[] = array("face" => $face, "value" => $value);
				}		
			}
		return $standardCards;
		}
	}
	public function shuffle(){
		$shuffled = shuffle($this->standardCards);
		return $shuffled;

	}
	public function deal($this->standardCards){
		$dealt = array();
		for ($i - 0; i < 6; i++){
			$dealt[] = $this->standardCards($i);
		}
	}
}

class Player{
	public $name;
	public $hand;
	public function __construct(){

	}
	public function draw(){

	}
	public function discard(){
		
	}
	
}
