<?php

require_once("../models/card.php");

class Player {
    var $cartes = [];
    var $values = [];

    function __construct() {
        $card1 = (new Card())->Onecard();
        $card2 = (new Card())->Onecard();

        array_push($this->cartes, $card1[0]);
        array_push($this->cartes, $card2[0]);

        array_push($this->values, $card1[1]);
        array_push($this->values, $card2[1]);
    }
}