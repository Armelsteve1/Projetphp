<?php
class ShoppingCart  extends Item
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
          echo "L'article doit peser moins de 10kg";
          echo '<br>';
        }
    }
    
    public function getid(){   
    }

    public function __toString()
    {
        
    }
    
    public function removeitem(){

    }
    public function itemcount(){

    }
    public function totalprice(){

    }


}
?>