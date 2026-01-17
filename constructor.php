<?php
 class ConstructorDemo{
    function __construct($message){
        echo $message;
    }
 }

    $obj = new ConstructorDemo("This message is from the constructor!");

?>