<!-- php -S 0.0.0.0:8000 -t www -->


<?php
require_once("../models/game.php");
require_once("../models/card.php");


$_SESSION["newgame"]= new Game();
$game = $_SESSION["newgame"];
echo $game->player->cartes[0];
echo $game->player->cartes[1];
echo "<form method ='post'><button>add a card</button></form>";
if(isset($_POST['submit'])){
   echo $game->deck->Onecard();
}  

echo'<br>';

echo $game->bank->cartes[0];
echo $game->bank->cartes[1];

echo'<br>';
 

echo $game->gamewinner();


// $_SESSION["newgame"]= new Game();
// $game = $_SESSION["newgame"];

// if (isset($_SESSION["newgame"])){
//     foreach ($game as $key => $value) {
//         echo($game->deck->Onecard());
//     }
// } else {
//     echo $game->player->cartes[0];
//     echo $game->player->cartes[1];
//     echo "<form method ='post'><button>add a card</button></form>";

//     if(isset($_POST['submit'])){
//         echo $game->deck->Onecard();
//     }  

//     echo'<br>';

//     echo $game->bank->cartes[0];
//     echo $game->bank->cartes[1];

//     echo'<br>';
    
//     echo $game->gamewinner();
// }