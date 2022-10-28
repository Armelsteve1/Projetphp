<?php
class ShoppingCart  extends Item
{

    private $items = array();
    private $id =1;
    private $weight;


    function  __construct ($name ,$price, $weight, $id){
        parent::__construct($name,$price);
        $this->id = $id;
        $this->weight = $weight;
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
       return uniqid($id) ;
    }

    public function __toString()
    {
        return $this ->id =$id . " " . this ->weight =$weight;
    }
    
}
?>