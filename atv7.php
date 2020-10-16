<!doctype html>
<html>
<head>
<Title> ATV7 PHP </title>
</head>
<body>

<?php

$temperatura = 20;
echo '<h1>A temperatura é de ' .$temperatura .'º<h1>';
	if ($temperatura<=3) {
	echo 'Dia gelado';
}
elseif ($temperatura > 3 && $temperatura <=15) {
	echo 'dia frio';
}
elseif ($temperatura > 15 && $temperatura <=29) {
	echo 'dia agradevel';
}
else {
	echo '...começa a ficar demasiado calor';
}

?>

<?php




</body>
</Title>
</head>
</html>
