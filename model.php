<?php  
function begin_damier($nb){ 
	$handle = fopen('../data.txt', 'w+');

	for ($i=0; $i < $nb; $i++) {

		for ($j=0; $j < $nb; $j++) { 

			if($j%2==1){
			    $draw = ($i%2==1)? "#": "*"; 
			}else{
			    $draw = ($i%2==1)? "*": "#"; 
			}

			fputs($handle, $draw);
		}

		fputs($handle, "\n");
	}

	fclose($handle);
}

function lign_damier($nb){
	$handle = fopen('../data.txt', 'r'); // ouvre un pointeur de fichier sur la première ligne

	$line = [];

	while($line[] = fgets($handle));

	fclose($handle);
	// taille 
	$dam_w = 350/$nb;
	$dam_h = 350/$nb;
	$x = 0;
	$y = 0;

	foreach ($line as $dam) {
		
		for ($k=0; $k < strlen($dam); $k++) { 
			// dessin de carré blanc et noir
			if($dam[$k] == "*") echo '<rect width="'.$dam_w.'" height="'.$dam_h.'" x="'.$x.'" y="'.$y.'" class="white"></rect>';
			if($dam[$k] == "#") echo '<rect width="'.$dam_w.'" height="'.$dam_h.'" x="'.$x.'" y="'.$y.'" class="black"></rect>';
			$x += $dam_w;

			if ($x == $dam_w*strlen($dam)) $x = 0;

		}

	$y += $dam_h;
	if ($y == $dam_h*strlen($dam)) $x = 0;

	}
}
