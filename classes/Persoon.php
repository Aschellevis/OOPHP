<?php

    class Persoon
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemiddeldCijfer;

        function __construct(string $naam, int $leeftijd, string $geslacht)
        {
            $this->naam = $naam;
            $this->leeftijd = $leeftijd;
            $this->geslacht = $geslacht;

            echo "Nieuw Persoon-object aangemaakt <br>";
            echo "De property naam is " . $this->naam . "<br>";
        }

        function __destruct()
        {
            echo "Persoon object $this->naam wordt verwijderd <br>";
        }

        public function getNaam(): string
        {
            return $this->naam;
        }

        public function setNaam(string $naam): void
        {
            $this->naam = $naam;
        }

        public function getLeeftijd(): int
        {
            return $this->leeftijd;
        }

        public function setLeeftijd(int $leeftijd): void
        {
            $this->leeftijd = $leeftijd;
        }

        public function getGeslacht(): string
        {
            return $this->geslacht;
        }

        public function setGeslacht(string $geslacht): void
        {
            $this->geslacht = $geslacht;
        }

        public function getIsStudent()
        {
            return $this->isStudent;
        }

        public function setIsStudent($isStudent): void
        {
            $this->isStudent = $isStudent;
        }

        public function getGemiddeldCijfer()
        {
            return $this->gemiddeldCijfer;
        }

        public function setGemiddeldCijfer($gemiddeldCijfer): void
        {
            $this->gemiddeldCijfer = $gemiddeldCijfer;
        }

        function getGegevens()
        {
            $gegevens =
                "<br>De gegevens van " . $this->naam . " zijn: " .
                "<br>Leeftijd: " . $this->leeftijd .
                "<br>Geslacht: " . $this->geslacht;
            return $gegevens;
        }

        function toString()
        {
            return("<br>De gegevens van " . $this->naam . " zijn:" .
            "<br>Leeftijd: ". $this->leeftijd .
            "<br>Geslacht: " . $this->geslacht);
        }

        public function gegevensOpslaan()
        {
            $array = [];
            $array[0] = $this->getNaam();
            $array[1] = $this->getLeeftijd();
            $array[2] = $this->getGeslacht();
            return $array;
        }


    }
?>