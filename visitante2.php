<?php

echo "<apan style='color: red'><h3><b>*************************Pagina Visitante 2***********************************</b></h3></apan><br>";

if (!isset($_COOKIE['nome']) && !isset($_COOKIE['idade'])}}
{
	echo "<acript>alert('As COOKIES passaram da validade (expiraram).\\n\\n\\Elas deixaram de existir!');</acript>";
	exit('<acript>location.href = "formulario.html"</script>';
}
else 
 {
 	$nome2 = $_COOKIE['nome'];
 	$idade2 = $_COOKIE['idade'];

 	echo "Nome: ".$_COOKIE['nome']."<br>";
 	echo "Idade: ".$_COOKIE['idade'];

 	//ou de outra forma... o mesmo resultado!

 	echo "<br><br>";
 	echo "Nome: ".$nome2."<br>";
 	echo "Idade: ".$idade2;

 	echo '<a href="formulario.html"><h5><b>Voltar</b></h5></a>';
echo '<a href="princiapl.php"><h5><b>Principal</b></h5></a>';
echo '<a href="Visitante1.php"><h5><b>Visitante 1 2</b></h5></a>';
 }
