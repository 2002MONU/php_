<?php
interface ProductFeatureInterface {
    function images();
    function ownerDetails();
}


  class Product implements ProductFeatureInterface {
   
    public function images() {
        return "Product images displayed.";
    }

    public function ownerDetails() {
        return "Owner details displayed.";
    }

  }

  $productNAme = new Product();
  echo $productNAme->images();
  echo "<br>";
    echo $productNAme->ownerDetails();
?>