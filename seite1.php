<?php
include('./phpSimple.php');
include('./menu.php');
?>
<div class="content">Hier befindet sich der Inhalt der Seite
<form action="./seite2.php?wochentag=Sonntag" method="post">
Vorname: <input type="text" name="vorname" /><br />
Namename: <input type="text" name="nachname" /><br />
<input type="Submit" value="Absenden" />
</form>
</div>

<?php
include('./footer.php');
?>