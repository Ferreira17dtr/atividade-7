<!doctype html>
<html>
<head>
<Title> ATV6 PHP </title>
</head>
<body>

<?php

$temperatura = 0;
echo '<h1>A temperatura é de ' .$temperatura .'ºh1>';
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



</body>
</Title>
</head>
</html>
