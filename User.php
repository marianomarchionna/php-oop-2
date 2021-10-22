<?php

    require 'Address.php';

    class User {
        protected $name;
        protected $surname;
        protected $age;
        use Address;

        function __construct($_name, $_surname, $_age)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
        }

        function setName($_name) {
            $this->name = $_name;
        }

        function getName(){
            return $this->name;
        }

        function setSurname($_surname) {
            $this->surname = $_surname;
        }

        function getSurname(){
            return $this->surname;
        }

        function setAge($_age) {
            if ($_age >= 18){
                $this->age = $_age;
            } else {
                throw new Exception('Mi dispiace, devi essere maggiorenne per poter acquistare.');
            }
        }

        function getAge(){
            return $this->age;
        }

    }

?>