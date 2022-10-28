<?php
class Item
{
    private $name ;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

   
    public function getName()
    {
        return $this->  name ;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

   
    public function getPrice()
    {
        return $this->price;
    }

   
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    
}
$article1= new Item('corn flakes',500);
   echo ($article1-> getName());
   echo ': ';
   
   echo ($article1-> getPrice());
   echo '€';
    //echo $article1-> additem();
?>
