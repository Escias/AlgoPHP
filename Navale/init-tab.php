<?php
	//saut de ligne auto
	function println(string $str){
		echo $str . PHP_EOL;
	}

	/*Initialise le tableau du joueur
	*100% copiable pour le faire pour l'ordi*/
	function init_player_board($player_board) {
		for ($col=0; $col < 10; $col++) {
			for ($line=0; $line < 10; $line++) {
				$player_board[$line][$col] = "~";
				print($player_board[$line][$col] . " ");
			}
			println("");
		}
		println("TABLEAU JOUEUR INITIALISE");
	}

	$player_board = array();
	init_player_board($player_board);

	println("Veuillez entrer la coordonnée de début et de fin d'un bateau (Ex: A4-A8).");
	$boat0 = trim(fgets(STDIN));
	$boat0 = strtoupper($boat0);
	$boat0 = str_replace(" ", "", $boat0);
	println($boat0);

?>
