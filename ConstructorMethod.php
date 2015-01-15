<?php
class Man {
    public $name;
    public $lastname;
    public $age;
    public $tall;
 
    function __construct($title, $name, $lastname, $age, $tall) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->tall = $tall;
    }
    
    function getLastName() {
        return "{$this->lastname}";
    }
                
} 
    

 $Man1 = new Man("Nate", "Munsell", 36, 6);
 print "The man's name is {$Man1->getLastName()}.";
  print $Man1->age;
 $Man2 = new Man();

 
 
 class Bus {
     public $number = '268';
     public $color = 'yellow';
     public $seats = 30;
 
     function __construct($title, $number, $color, $seats) {
        $this->number = $number;
        $this->color = $color;
        $this->seats = $seats;
    }
     
     function getNumber () {
         return "{$this->number}";
     }
 }
 
 $bus1 = new Bus ("264","blue",45);
 print "The bus number is {$bus1->getNumber()}. ";
 
 
 
 class Woman {
    public $name = 'Anna';
    public $lastname='Sandoval';
    public $age = 16;
    public $tall = 5;

    function __construct($title, $name, $lastname, $age, $tall) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->tall = $tall;
    }
    
    function getName () {
        return "{$this->name}";
    }
       
 }

 $lady1 = new Woman ("Marissa", "Langley", 45);
 print "The lady's name is {$lady1->getName()}. \n" ;     
