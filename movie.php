<?php

    class Movie {
        private $name;
        private $director;

        function __construct($name, $director) {
            $this->name = $name;
            $this->director = $director;
        }

        function getName()
        {
            return $this->name;
        }

        function getDirectorName()
        {
            return $this->director->getName();
        }
    }

    class Director {
        private $name;
    

        function __construct($name) {
            $this->name = $name;
        }

        function getName() {
            return $this->name;

        }

    }

    ?>
