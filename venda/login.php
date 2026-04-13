<link ref="stylesheet" type="text/css" href="style.css">
<?php 

	$login = "kevin10";
	$senha = "Kevin10*";
	
	if ($_POST["login"] == $login and $_POST["senha"] == $senha)
	{ 
			echo "<h4> Seja bem-vindo(a), $login </h4>";
			//header (header: "Refresh: 2; URL=office.html");
			echo "<a href='office.html'/> <h2> Preços incriveis </h2> </a>";
	    }
	    else
		{
			echo "<h4> Login ou senha invalidos! </h4>";
			//header (header:Refresh: 2; URL=index.html"); 
			echo "<a href='index.html'/> <h2> Home </h2> </a>";
		}

?>		
