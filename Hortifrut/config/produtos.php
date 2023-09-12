<?php

    class Produt
    {

        protected $cod;
        protected $name;

        public function __construct($cod, $name)
        {
            $this->name = $name;
            $this->cod = $cod;
        }

        public function debug(){
            echo 'Cod: ' . $this->cod . '| Name: ' . $this->name . "<br/>";
        }
    }

?>