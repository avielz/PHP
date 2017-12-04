<?php
    require_once 'ICalc.php';

    class Multiply implements ICalc {
        private $a;
        private $b;

        function __construct($Array) {
            $this->a = $Array['a'];
            $this->b = $Array['b'];
        }
      
       function geta() {
            return $this->a;
        }

        function getb() {
            return $this->b;
        }
    
        function calculate () {
        return ($this->geta() * $this->getb());
        }
    }

    class Division implements ICalc {
        private $a;
        private $b;

        function __construct($Array) {
            $this->a = $Array['a'];
            $this->b = $Array['b'];
        }
      
       function geta() {
            return $this->a;
        }

        function getb() {
            return $this->b;
        }
    
        function calculate () {
        return ($this->geta() / $this->getb());
        }
    }

    class Plus implements ICalc {
        private $a;
        private $b;

        function __construct($Array) {
            $this->a = $Array['a'];
            $this->b = $Array['b'];
        }
      
       function geta() {
            return $this->a;
        }

        function getb() {
            return $this->b;
        }
    
        function calculate () {
        return ($this->geta() + $this->getb());
        }
    }

    class Minus implements ICalc {
        private $a;
        private $b;

        function __construct($Array) {
            $this->a = $Array['a'];
            $this->b = $Array['b'];
        }
      
       function geta() {
            return $this->a;
        }

        function getb() {
            return $this->b;
        }
    
        function calculate () {
        return ($this->geta() - $this->getb());
        }
    }
    ?>
