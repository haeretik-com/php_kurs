<?php
header('Content-Type: text/html; charset=iso-8859-1');
?>
<html>
<head>
<title>PHP Kurs</title>
</head>
<body>

<?php
	$erg = $_POST["w1"] * $_POST["w1"];
	
	echo "Das Quadrat von " . $_POST["w1"] . " ist $erg.";
?>

</body>
</html>