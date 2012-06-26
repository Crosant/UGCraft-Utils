<?php

if(!defined("IN_AKTIVIERUNG"))
    die("Nich schummeln!");
    
include(WCF_DIR."lib/page/RulesPage.class.php")

?>
<h1>Aktivierung auf UGCraft</h1>
<p class="own_p">
    Hier findest du Informationen und Anweisungen zur Aktivierung. Du solltest dir alles genau durchlesen, damit du schnell aktiviert werden kannst.
</p>
<h2>Aktivierung</h2>
<p class="own_p">
    Die Aktivierung erfolgt in 3 Schritten:
</p>
<ol>
    <li>Lesen und Bestätigen der Nutzungsbedingungen,</li>
    <li>Lesen der Regeln und finden des ersten Passwortteils</li>
    <li>und das Finden des zweiten Teils des Passworts auf dem Server und die endgültige Aktivierung.</li>
</ol>
<p class="own_p">
    Hier wirst du durch die Aktivierung geführt, folge einfach den Anweisungen.
</p>
<br />
<h2>1. Schritt: Nutzungsbedingungen</h2>
<p class="own_p">
    Der erste Schritt besteht darin, die unten stehenden Nutzungsbedingungen zu lesen und zu bestätigen, indem du das Häkchen setzt und auf "Weiter" klickst.
</p>

<div class="scroll-box">
    
    <h3 class="subHeadline">Allgemeines zur Benutzung</h3>
        <ol>
            <li>Bei rechtlichen Fragen sollte zunächst Einsicht in das <a href="/impressum/">Impressum</a> genommen werden.</li>
            <li>Auf dem Server gelten die Regeln der im Internet allgemein gültigen Netiquette. Es soll ein freundlicher Umgangston eingehalten werden.</li>
            <li>Die Administratoren/Projektleiter haben in allen Fragen den Server und den UltimateGamers Club betreffend das letzte Wort.</li>
            <li>Von Administratoren/Projektleiter eingesetzte Moderatoren (auch andere Titel) können administrative Aufgaben wahrnehmen, wobei sie immer noch den Administratoren unterstellt sind.</li>
            <li>Jeder Benutzer ist für die von ihm erstellen Inhalte, Meinungen und anderen Äußerungen als einziger verantwortlich. Die Administration spricht sich von jeglicher Verantwortung für fremden Inhalten frei. Das beinhaltet auch externe Links.</li>
        </ol>

	<h3 class="subHeadline">Gültigkeit</h3>
	<p>Diese Nutzungsbedingungen bzw. Forenregeln sind für UltimateGamers.de ab dem 05.01.2012 bis zur Veröffentlichung neuer Forenregeln gültig und müssen eingehalten werden.</p>

</div>

<form method="post" action="<?=SELF?>">
    <p class="own_p">
        <input type="checkbox" name="nb" id="nb" required="required" value="1" /> <label for="nb">Ich habe die Nutzungsbedingungen von UGCraft und UltimateGamers.de gelesen und bin mit ihnen einverstanden.</label>
    </p>
    <br />
    <input type="submit" class="submit" name="submit-1" value="Weiter!" />
</form>
