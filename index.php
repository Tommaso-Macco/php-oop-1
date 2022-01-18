<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <?php
        /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */
    ?>

</head>
<body>
    <?php

        class film {
            public $title;
            public $subTitle;
            public $movideDir;

            public function __construct($title){
                $this -> title = $title;
            }

            public function getFullTitle(){
                if (!$this->subTitle) {
                    return $this->title;
                } else {
                    return $this->title . ": " . $this->subTitle;
                }
            }
            public function __toString(){
                if (!$this->movieDir) {
                    return $this->getFullTitle() . " | ???";
                } else {
                    return $this->getFullTitle() . " | " . $this->movieDir;
                }
            }
        }

        // Solo Titolo Del Primo Film
        $f1 = New Film ("Matrix");

        // Titolo e Sottotitolo del secondo Film
        $f2 = new Film ("Star Wars");
        $f2 -> subTitle = "Il Ritorno Dei Jedi";

        // Titolo, Sottotitolo e Regista del Terzo Film
        $f3 = new Film ("Il Signore Degli Anelli");
        $f3 -> subTitle = "Gnomi Da Giardino";
        $f3 -> movieDir = "Dante Alighieri";

        echo $f1 . "<br>";
        echo $f2 . "<br>";
        echo $f3 . "<br>"
    ?>
</body>
</html>