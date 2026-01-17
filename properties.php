<?php
class Properties {
   // public property , can be accessed from anywhere
   // protected property , can be accessed within the class and by classes derived from that class
   // private property , can be accessed only within the class
   public $name = "public property";
   
   function showName() {
       return $this->name;
   }

   function updateName($newName) {
       $this->name = $newName;
   }
}

$prop = new Properties();
$prop->updateName("Updated public property");
echo $prop->showName();
?>