<?php
class student {
    private $fname;
    private $lname;
    private $tz;

    function __construct ($fname, $lname, $tz) {
        $this-> setFname($fname);
        $this-> setlname($lname);
        $this-> setTz($tz);
    }
    function getFname() {
        return $this->fname;
    }
    function setFname($fname) {
        $this->fname = $fname;
    }
    function getlname() {
        return $this->lname;
    }
    function setlname($lname) {
        $this->lname = $lname;
    } 
    function getTz() {
        return $this->tz;
    }
    function setTz($tz) {
        $this->tz = $tz;
    }
    function getFullDetails() {
        return $this-> getFname() . '  '. $this-> getlname() . '  ' . $this-> getTz();
    }
    
}
    $student1 = new Student('aviel', 'zwebner', '11111111');
    $student2 = new Student('dfsdfsd', 'dfsdfsds', '45345353');
    $student3 = new Student('lipsum', 'ipsum', '9999999');

    echo '<br>student1: ' . $student1->getFullDetails();
    echo '<br>student2: ' . $student2->getFullDetails();
    echo '<br>student3: ' . $student3->getFullDetails();

    ?>

