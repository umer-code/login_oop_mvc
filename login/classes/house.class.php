<?php
    class House {
        public $number;
        public function setName($number){
            $this->number = $number;
        }
        public function getName(){
            return $this->number;
        }
    }
?>