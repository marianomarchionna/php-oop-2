<?php

    class Product {
        protected $name;
        protected $price;

        function __construct($_name, $_price)
        {
            $this->name = $_name;
            $this->price = $_price;
        }

        function setName($_name) {
            $this->name = $_name;
        }

        function getName(){
            return $this->name;
        }

        function setPrice($_price) {
            $this->price = $_price;
        }

        function getPrice(){
            return $this->price;
        }

    }

?>