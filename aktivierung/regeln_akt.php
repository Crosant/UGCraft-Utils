<?php

if(!defined("IN_AKTIVIERUNG"))
    die("Nich schummeln!");

// Passwort anzeigen lassen
define("ZEIGE_PASS", true);

// Erster Teil des Passwortes:
$pass = "Grafik";

// Tipp
// "Das Wort ist xy Zeichen lang und %tipp%."
$tipp = "ist ein Teil jedes Computerspiels"

?>

<h2>Schritt 2: Bestätigen der Regeln</h2>
<p>
    Damit wir uns wirklich sicher sein können, dass du die Regeln gelesen hast, musst du in diesen ein Wort finden, welches zur Aktivierung unerlässlich ist. Dieses Wort sollte leicht zu finden sein, da es in keinem sinnvollen Zusammenhang zu den Regeln steht und sofort ins Auge fällt.
</p>
<p>
    Durch Bestätigen der Regeln erklärst du dich mit einer Bestrafung bei Fehlverhalten von deiner Seite aus einverstanden.
</p>
<h2>Tipp</h2>
<p>
    Das Wort ist <strong><?=strlen($pass)?> Zeichen</strong> lang und <?=$tipp?>. Es steht in keinem sinnvollen Zusammenhang zum Text. Finde es unbedingt, in-game wird es keine Hilfe geben!
</p>

<div class="scroll-box">
<?php
include "regeln_text.php";
?>

</div>

<p>
    <strong>Passwort gefunden? Gut merken, du brauchst es später noch!</strong>
</p>

<form method="post" action="<?=SELF?>">
    <p>
        <input type="checkbox" name="regeln" id="regeln" required="required" value="1" /> <label for="nb">Ich habe die Regeln gelesen und bin mit ihnen einverstanden.</label>
    </p>
    <input type="submit" method="post" action="<?=$_SERVER['PHP_SELF']."?".$_SERVER['argv']?>" class="submit" name="submit-2" value="Weiter!" />
</form>
