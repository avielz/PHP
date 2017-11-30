<?php
require_once('movie.php');

$MovieArray = [
    'm1' => new Movie("Jaws" , new Director("Speilberg")),
    'm2' => new Movie("Avengers" , new Director("Zamicks")),
    'm3' => new Movie("Ghost Busters" , new Director("Ramey")),
    'm4' => new Movie("The Sixth Sense" , new Director("Shamalan")),
    'm5' => new Movie("The Matrix" , new Director("Twins"))
];



foreach ($MovieArray as $key => $movie)  {
    echo 'Movie name: ' . $movie->getName() . '<br>';
    echo 'Movie director: ' . $movie->getDirectorName() . '<br><br>';
}

?>
