<html>
<head><title>PHP Kurs PHP</title></head>
<body>




<!-- tabelle_schachtel.php
<table border="1">
<?php
	for ($r=8; $r<=13; $r++)
	{
		echo "<tr>";
		for ($s=1; $s<=5; $s++)
			echo "<td>$r/$s</td>";
		echo "</tr>";
	} 
?>
</table>
-->
<!-- tabelle.php
<table border="1">
<?php
	for ($i=8; $i<=13; $i++)
	{
		echo "<tr>";
		echo "<td>Zeile</td>";
		echo "<td align='right'>$i</td>";
		echo "</tr>";
	}
?>
</table>
<br>
<table border="1">
<?php
	for ($i=8; $i<=13; $i++):
?>
<tr>
<td>Zeile</td>
<?php echo "<td align='right'>$i</td>"; ?>
</tr>
<?php endfor; ?>
</table>
-->
<!-- KLEINES EINMAL EINS - nochmal wiederholen, habe ich nicht verstanden
<?php
	for ($r=1; $r<=10; $r++)
	{
		for ($s=1; $s<=10; $s++)
			echo ($r * $s), " "; echo "<br>";
	}
?>
-->
<!-- KLEINES EINMAL EINS - u_tabelle.php - Einmal Eins in einer Tabelle
<table border="1" width="100%">
<?php
	for ($r=1; $r<=10; $r++)
	{
		echo "<tr>";
		for ($s=1; $s<=10; $s++)
			echo "<td>".$r*$s."</td>";
		echo "</tr>";
	}
?>
</table>
 -->
<!-- u_for.php NOCHMAL ANSCHAUEN - letzte zeile nicht hinbekommen
<?php 
	for ($i=13; $i<=29; $i=$i+4) { echo "$i | "; } echo "<br />";
	for ($i=2; $i>=-1; $i=$i-0.5) { echo "$i | "; } echo "<br />";
	for ($i=2000; $i<=6000; $i=$i+1000) { echo "$i | "; } echo "<br />";
	for ($i=5; $i<=13; $i=$i+2) { echo "Z$i | "; }  echo "<br />";
	for ($i=1; $i<=3; $i++) { echo "a b$i "; }  echo "<br />";
	
	for ($i=2 ; $i<=23; $i=$i+1+9) { echo "c$i | "; }  echo "<br />";
?>
-->
<!-- if_html.php
<?php
	$preis =1.12;
	if ($preis < 1):
?>
Der Preis liegt unter 1 Euro.<br />
Guenstig...
<?php else: ?>
Der Preis liegt ueber 1 euro.<br />
<b>Langsam wird es teuer</b>
<?php endif; ?>
-->
<!-- switch_case.php
<?php
	switch($_POST["sorte"])
	{
		case "N":
			$erg = $_POST["liter"] * 1.35;
			echo $_POST["liter"] . " L Normal kosten $erg &euro;.";
			break;
		case "S":
			$lol = 1.4;
			echo $_POST["liter"] . " Lister Super kosten " . $_POST["liter"] * $lol . " &euro;.";
			break;
		case "D" || "d":
			$erg = $_POST["liter"] * 1.1;
			echo $_POST["liter"] . " L Diesel kosten $erg &euro;.";
			break;
		default:
			echo "lol";
	}
?>
 -->
<!-- u_if_schachtel Übung
<?php
	$liter = $_POST["liter"];
	$nor = 1.35;
	$sup = 1.4;
	$die = 1.1;
	
	if ($_POST["sorte"] == "N")
	{
		echo $_POST["liter"] . " Liter Normal kosten " . $liter * $nor . " &euro;";
	}
	else 
	{
		if ($_POST["sorte"] == "S")
		{
			echo $_POST["liter"] . " Liter Super kosten " . $liter * $sup . " &euro;";
		}
		else
		{
			if ($_POST["sorte"] == "D")
			{
				echo $_POST["liter"] . " Liter Super kosten " . $liter * $die . " &euro;";
			}
			else 
			{
				echo "gebe S D N ein";
			}
		}
		
	}	
?>
-->
</body>
</html>
