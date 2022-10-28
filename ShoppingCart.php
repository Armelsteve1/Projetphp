<?php
class ShoppingCart 
{

    private $items = array();
      private $id;

      public function __construct(){
          $this->id = uniqid();
      }


      public function addItem($item){
        $weight = $item->getWeight();
        if ($weight < 10000 ){
          $this->items[] = $item;
        } else {
          echo '<br>';
          echo "Item must weight less than 10kg";
          echo '<br>';
        }
      }

    // public function additem(){

    // }
    // public function removeitem(){

    // }
    // public function itemcount(){

    // }
    // public function totalprice(){

    // }


}
?>