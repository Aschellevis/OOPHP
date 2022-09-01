<?php

    class ParentClass
    {
        public $voornaam;
        public $achternaam = "Delmar";
        private $creditcard = "Visa";

        function __construct(string $voornaam)
        {
            $this->voornaam = $voornaam;
        }

        public function getAchternaam()
        {
            return $this->achternaam;
        }
    }
?>