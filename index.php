 <!-- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  -->

<?php 

class Movies {
    public $name;
    public $genre;
    public $advisoryCategory;

    public function __construct ($_name, $_genre, $_advisoryCategory) {
        $this -> name = $_name;
        $this -> genre = $_genre;
        $this -> advisoryCategory = $_advisoryCategory;
    }

    public function setAdvisoryCategory ($advisoryCategory) {
        if ($advisoryCategory == "General"):
            $this -> advisoryCategory = "G";

        elseif ($advisoryCategory == "Parental Guidance") :
            $this -> advisoryCategory = "PG";

        else :
            $this -> advisoryCategory == "M";
        endif;
    }

    public function getAdvisoryCategory () {
        return $this -> advisoryCategory;
    }
}

$spiderman = new Movies ("Spider Man Far From Home", "Action","General");
$avengers = new Movies ("Avengers Endgame", "Adventure", "Parental Guidance");

$spiderman -> setAdvisoryCategory($spiderman -> advisoryCategory);
$avengers -> setAdvisoryCategory($avengers -> advisoryCategory);

echo "<p>". $spiderman -> name . "</p>";
echo "<p>". $spiderman -> genre . "</p>";
echo "<p>". $spiderman -> getAdvisoryCategory() . "</p>";

echo "<p>". $avengers -> name . "</p>";
echo "<p>". $avengers -> genre . "</p>";
echo "<p>". $avengers -> getAdvisoryCategory() . "</p>";


?>