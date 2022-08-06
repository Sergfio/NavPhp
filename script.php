<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Eure erster PHP-Script</title>
</head>

<body>
<h1>Herzlich Willkommen</h1>

<p>Dies ist eure erste PHP-Datei. Eine Scriptumgebung könnt ihr wie folgt starten:
<?php
echo "Mittels echo können Daten ausgegeben werden";
?></p>

<p>Später könnt ihr in PHP dynamische Inhalte erzeugen. Ein einfaches Beispiel ist das aktuelle Datum auszugeben:
<?php
echo date("d.m.Y H:i:s");
?></p>
<?php
$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
echo "Hallo $vorname $nachname";
?>
</body>
</html>