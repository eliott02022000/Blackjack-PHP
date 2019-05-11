<?php
Class Card {
    var $value = 0;

    function jeu() {
        $jeu = array(
        "As"=>1,
        2=>2,
        3=>3,
        4=>4,
        5=>5,
        6=>6,
        7=>7,
        8=>8,
        9=>9,
        10=>10,
        "Valet"=>10,
        "Dame"=>10,
        "Roi"=>10,
        );

        $finalcards = array_rand($jeu);


        // function test_as($total){
        //     if($total + 11 > 21)
        //         return $total +=1;
        //     else 
        //         return $total += 11;
        // }
        $this->value = $jeu[$finalcards];

        return $finalcards;

    }

    function colors() {
        $colors = array("carreaux", "pique", "coeur", "trefle");
        $finalcolors = $colors[mt_rand(0, count($colors) - 1)];
    
        return $finalcolors;
    } 

    function Onecard() {
        return [$this->jeu()." de ".$this->colors()."  ", $this->value];
    }
} 


