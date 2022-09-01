<?php

    class ChildClass extends ParentClass
    {
        function __construct(string $voornaam)
        {
            parent::__construct($voornaam);
            $this->voornaam = $voornaam;
        }
    }
?>