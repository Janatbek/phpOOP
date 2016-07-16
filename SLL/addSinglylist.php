<?php 

Class Node{
	public function __construct($value){
		$this->value = $value;
		$this->next = null;
	}
}


Class SinglyLinkedList{
	public function __construct(){
		$this->head = null;
	}
}

//create new Linked List Object
$newList = new SinglyLinkedList();

//set the Linked List head to a new Node
$newList->head = new Node(1);
//from that head node we now add the next node
$newList->head->next = new Node(2);
//we continue adding nodes to teh end of the Linked List
$newList->head->next->next = new Node(3);
$newList->head->next->next->next = new Node(4);
$newList->head->next->next->next->next = new Node(5);
//var_dump($newList);


Class SinglyLinkedList{
	public function __construct(){
		$this->head = null;
	}
	public function add($val){
	/*
	return true if added correctly
	check to see if there is not a head because then, we can create the head node
	*/
		if($this->head == null){
		//point head to that new node
			$this->head = new Node($val);
		}else{
			/* we have a head lets navigate through the linked list till we get to the end when we reach the end we can add the new node there

			temp to help us navigate the linked list
			*/
			$current = $this->head;
			while($current->next){
				//move our pointer forward to the next node
				$current = $current->next;
			}
			//we reache the end! time to add the new node to the end
			$current->next = new Node($val);

		}
	}
}
	
$newList2 = new SinglyLinkedList();
$newList2->add(1);
$newList2->add(2);
$newList2->add(3);
$newList2->add(4);
$newList2->add(5);
$newList2->add(6);
var_dump($newList2);





?>