<!doctype html>
<html>
<head>
<Title> ATV7 PHP </title>
</head>
<body>

<?php

$nota = 15;
switch ( $nota ) {
	case ( $nota > 20 );
		echo 'Valor da nota não é válida';
	break;
	case ($nota >= 10 && $nota <= 20);
	echo 'Aluno <span style="color:#00ff00">Aprovado</span> com' .$nota. ' valores.';
	echo '<br>Muito bom trabalho';
	break;

	case ($nota < 10 );
		echo 'Aluno <span style="color:#ff0000"> Reprovado </span> com ' .$nota. ' valores.';
	echo '<br> Deverá trabalhar mais para alcançar resultados positivos';
	break;
	case ($nota == 0);
		echo 'Sem valor';
	break;

}


?>

</body>
</Title>
</head>
</html>