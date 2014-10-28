<?php
class Chair 
{
    public $brand = "";
    public $leg = 4;
    public $seat = "";
    
    
    function __construct($brand,$seat) 
    {
        $this->brand = $brand;
        
        $this->seat = $seat;
    }
    
    function table() {
        return "I have a comfortable " .  $this->brand  . " and it has a " . 
$this->seat ." seat. It has " . $this->leg . " legs.";
    }
    
}

$recliner = new Chair ("Lazy Boy", "leather"); //new Chair
echo $recliner->table();
echo "<br>";
echo $recliner->leg;
echo "<br>";

//start function
function familyName ($fname, $year) {
        echo "$fname Eliyahu. Born in $year <br>";
}

familyName("Ben","1999");
familyName("Carmit","1969");
familyName("Danny","1964");

?>