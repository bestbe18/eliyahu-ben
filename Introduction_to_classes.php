<?php
class Man {
    public $name = 'David';
    public $lastname='Howard';
    public $age = 38;
    public $tall = 6;
 
    function getLastName() {
        return "{$this->lastname}";
    }
                
} 
    

 $Man1 = new Man();
 $Man1->name = 'Brian';
 $Man1->lastname='Howard';
 print "The man's name is {$Man1->getLastName()}.";
  print $Man1->age;
 $Man2 = new Man();

 
 
 class Bus {
     public $number = '268';
     public $color = 'yellow';
     public $seats = 30;
     
     function getNumber () {
         return "{$this->number}";
     }
 }
 
 $bus1 = new Bus ();
 $bus1->number = '264';
 $bus->color = 'blue';
 print "The bus number is {$bus1->getNumber()}. ";
 
 
 
 class Woman {
    public $name = 'Anna';
    public $lastname='Sandoval';
    public $age = 16;
    public $tall = 5;

    function getName () {
        return "{$this->name}";
    }
       
 }

 $lady1 = new Woman ();
 $lady1->name = 'Marissa';
 $lady1->lastName = 'Langley';
 $lady1->age = 45;
print "The lady's name is {$lady1->getName()}. ";     
