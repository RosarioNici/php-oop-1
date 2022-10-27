<?php 

class Movie {

public $title;
public $genere;
public $year;
public $platformStreaming;
public $opinion;
public $stars;


private $idfilm = '';


function _construct($_title , $_genere, $_year){
    $this->title = $_title;
    $this->genere = $_genere;
    $this->year = $_year;
    
}

public function setOpinion($opinion){
    if($opinion > 4);
    $this->stars= 100;
}
public function getStars(){
    return $this->stars;
}


}

$HarryPotter = new Movie('harrry Potter e i doni della morte parte 2', 'fantasy', '2011' );
$Ilsignoredeglianelli = new Movie('La compagnia dell anello', 'fantasy', '2001');
echo($HarryPotter->title);
$HarryPotter->setOpinion(5);
$Ilsignoredeglianelli->setOpinion(5);

echo('<div>' . 'Metodo' .$HarryPotter->getStars() . '</div>' );
var_dump($HarryPotter);
var_dump($Ilsignoredeglianelli);

echo($HarryPotter->title);



