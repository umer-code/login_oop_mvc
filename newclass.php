<?php
    class Person {
        private $name;
        private $age;
        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    
    }
    // class Pet extends Person {
    //     public function owner(){
    //         $a = $this->name;
    //         return $a;
    //     }
    // }
    // // $a = new Person();
    // // echo $a->name;
    
?>