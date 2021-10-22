<?php

    require_once 'User.php';

    class Premium extends User {
        protected $discount;

        function setDiscount($_discount) {
            $this->discount = $_discount;
        }

        function getDiscount(){
            return $this->discount;
        }
    }

?>