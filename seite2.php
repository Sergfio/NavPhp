<?php
include('./phpSimple.php');
include('./menu.php');
?>
<div class="content">Hier steht der Inhalt von Seite 2
</div>
<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$wochentag = $_GET["wochentag"];

echo "Hallo $vorname $nachname. Treffen wir uns am $wochentag?";
?>

<?php
include('./footer.php');
?>