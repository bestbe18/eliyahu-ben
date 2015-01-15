<?php
    //Example 1
class Person{
    public $firstName;
    public $lastName;
    public $gender;
    public $weight;
    

    function __construct($firstName,$lastName,$gender,$weight){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->weight = $weight;
    }

    public function getName() {
        return "This is my first name " . $this->firstName .
                " and last " . $this->lastName . ".";
    }
}

class male extends Person {
    function __construct($firstName,$lastName,$gender,$weight,$wallet){
        parent::__construct($firstName,$lastName,$gender,$weight);
        $this->wallet = $wallet;
    }
    
    function greet() {
        return $this->wallet;
    }
}

class female extends Person {
    function __construct($firstName,$lastName,$gender,$weight, $purse){
        parent::__construct($firstName,$lastName,$gender,$weight);
        $this->purse = $purse;
    }
    function hello() {
        return $this->purse;
    }
}

$Male = new male("Benjamin", "Peter", "male", 110, true);
print "Person 1 is a " . $Male->getName();


//Example 2
class Book {
    public $bookName;
    public $ganer;


    function __construct($bookName, $ganer) {
        $this->bookName = $bookName;
        $this->ganer = $ganer;

    }

    function getName2() {
        return "This is the book name " . $this->bookName .
                " and ganer " . $this->ganer . ". ";
    }

}

class fiction extends Book {
    function __construct($bookName, $ganer, $unreal){
        parent::__construct($bookName, $ganer);
        $this->unreal = $unreal;
    }
    
    function unbelieveble() {
         return $this->unreal;
    }
}

class nonfiction extends Book {
    function __construct($bookName, $ganer, $real){
        parent::__construct($bookName, $ganer);
        $this->real = $real;
    }
    
    function believeble() {
        return $this->real;
    }
}



$Fiction = new fiction("The cat in the hat", "fiction",true);
print "Book 1 is a " . $Fiction->getName2();




//Example 3
class transportation {
    public $type;
    public $wheelsnumber;
    

    function __construct($type, $wheelsnumber) {
        $this->type = $type;
        $this->wheelsnumber = $wheelsnumber;

    }

    function TransportationType() {
        return "This is a transportaion with " . $this->type;
    }

}

class airplane extends transportation {
    function __construct($type, $wheelsnumber,$fly){
        parent::__construct($type, $wheelsnumber);
        $this->fly = $fly;
    }
       
    function air() {
        return $this->fly;
    }
}

class cars extends transportation {
    function __construct($type, $wheelsnumber,$roll){
        parent::__construct($type, $wheelsnumber);
        $this->roll = $roll;
    }
    function ground() {
        return $this->roll;
    }
}

$Cars = new cars("Hot Wheels car", 4,true);
print "transportation 1 is a"  . $Cars->TransportationType();

?>