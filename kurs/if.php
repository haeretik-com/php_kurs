<?php
header('Content-Type: text/html; charset=iso-8859-1');
?>
<html>
<head>
<title>PHP Kurs</title>
</head>
<body>

<?php
	$s = 2;
	$n = 3;
	$ergs = $_POST["menge"] * $s;
	$ergn = $_POST["menge"] * $n;

	if ($_POST["sorte"] == "S")
		echo $_POST["menge"] . " Liter Super kosten " . $ergs;
	if ($_POST["sorte"] == "N")
		echo $_POST["menge"] . " Liter Benzin kosten " . $ergn . "&euro;";
?>

</body>
</html>