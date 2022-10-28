<?php
    class Freshitem extends Item {

        private  $bestbefortdate;

        function  __construct ($name ,$price, $weight, $bestBeforedate){
            parent::__construct($name,$price,$weight);
            $this->bestbefortdate = $bestBeforedate;
        }

        public function getbestBeforeDate(){
            return $this->bestbefortdate;
        }

        public function setbestBeforeDate($bestBeforedate){
             $this->bestbefortdate=$bestBeforedate;
        }

        public function __toString()
        {
            return $this ->bestbefortdate =$bestBeforedate . " " . parent::__toString();
        }
    }
?>