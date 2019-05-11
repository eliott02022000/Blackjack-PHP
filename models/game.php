<?php

require_once("../models/player.php");
require_once("../models/card.php");
require_once("../models/bank.php");


class Game {
    var $deck;
    var $player;
    var $bank;

    function __construct() {
        $this->deck = new Card;
        $_SESSION["deck"] = $this->deck;

        $this->player = new Player;
        $_SESSION["deck"] = $this->player;

        $this->bank = new Bank;
        $_SESSION["deck"] = $this->bank;
    }

    function gamewinner() {
        $total = $this->player->values[0] + $this->player->values[1];
        $total2 = $this->bank->values[0] + $this->bank->values[1];
        if ($total == 21) {
            return "Ta gagner player";
        }
        if ($total2 == 21) {
            return "Ta gagner Bank";
        }

        if ($total > $total2) {
            return "Ta gagner Player";
        }

        if ($total < $total2) {
            return "Ta gagner Bank";
        }

        if ($total == $total2) {
            return "Personne ne gagne";
        }

        if ($total > 21) {
            return "Ta perdu player";
        }
        if ($total2 > 21) {
            return "Ta perdu Bank";
        }

    }
} 