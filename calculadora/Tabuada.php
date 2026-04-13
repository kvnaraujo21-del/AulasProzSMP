<link rel="stylesheet" href="style.css/>
<?php 
	
	$numero = $_POST['numero'];
	
	echo "Tabuada do $numero </br>";
	
	for($i = 1; $i <= 10; $i++){
		$tabuada = $numero * $i;
	echo "<br>$numero x $i = $tabuada";
	}
?>	