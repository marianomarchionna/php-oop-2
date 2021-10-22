<?php

    trait Address {
        public $address;
        public $city;
        public $cap;

        public function getAddress(){
            return $this->address . ', ' . $this->city  . ' - ' . $this->cap . '. ';
        }
    }

?>