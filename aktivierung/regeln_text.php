<?php
if(defined("ZEIGE_PASS")) {

    // Anfügen eines Leerzeichens, damit die Ausgabe stimmig ist
    $pass .= ' ';

    // Anzahl von Positionen im Text:
    $anz_pos = 3;

    // Position bestimmen
    $rand_pos = rand(0, $anz_pos-1);

    // Positionsarray beschreiben
    $pos = array();

    for($i = 0; $i < $anz_pos; $i++) {
        
        if($i == $rand_pos)
            $pos[$i] = $pass;
        else
            $pos[$i] = "";
    }

}
else {
    $pos = array();
}

// Zähler
$z = 0;

// Einzufuegen in den Text: $pos[$z++]

?>

<h3 dir="ltr">Vorwort</h3>
<p>
    UGCraft ist ein privat betriebener Minecraft-Server, auf dem kostenfrei gespielt werden kann. Die Betreiber des Servers haben keinerlei finanzielle Vorteile durch UGCraft. Der Spieler hat keinen Anspruch auf Dinge wie Rückerstattung, Entbannung oder Transparenz.
</p>
<h3 dir="ltr">Gesunder Menschenverstand</h3>
<p>
    Wir bitten jeden Spieler bei Unklarheiten Gebrauch von seinem Gesunden Menschenverstand zu machen. Sämtliche unverhältnismäßigen Vorteilsnahmen oder absichtliche Störung des Spielbetriebs sind nicht erlaubt, z.B. Hacking, Cheating, Griefing, Flaming, etc.
</p>


<h3 dir="ltr">Miteineinander spielen</h3>
<p>
    Respekt ist das wichtigste Gut eines guten Spielers. Dazu gehört auch das Helfen und die Höflichkeit untereinander. Behandelt alle Spieler, v.a. neue, fair und respektvoll, dann könnt <?php echo $pos[$z++]; ?>ihr auch dasselbe von ihnen erwarten.<br />
    Falls es doch mal Streit gibt, sollte man folgendes Prinzip anwenden: Jedem das Seine. Geht dem Anderen aus dem Weg.
</p>


<h3 dir="ltr">Systemregeln</h3>
<p>
    Damit unser Wirtschafts- und Bausystem auch eingehalten <?php echo $pos[$z++]; ?>wird, ist das ganze in Regeln festgehalten.
</p>
<ul>
    <li>Das Farmen/Minen auf der Hauptwelt ist untersagt.</li>
    <li>Es darf lediglich auf einem erworbenen Grundstück oder auf einem von einem GM/Admin freigegebenen Gebiet gebaut und abgebaut werden. Ausnahme: Farmwelt.</li>
</ul>

<h3 dir="ltr">Ränge</h3>
<p>
    Auf UGCraft gibt es verschiedene Ränge, um die Rechte eindeutiger zu verteilen. Aufsteigend sortiert sind das:
</p>
<ul>
    <li>
        <strong>Neuling</strong><br />
        Keine Baurechte, noch nicht aktiviert
    </li>
    <li>
        <strong>Spieler</strong><br />
        Baurechte, mit aktuellem Level vor dem Namen
    </li>
    <li>
        <strong>Helper</strong><br />
        Wie der Name schon sagt, Helfer. Sie helfen Spielern und Administratoren/GM.
    </li>
    <li>
        <strong>Gamemaster (GM)</strong><br />
        Ein Moderator <?php echo $pos[$z++]; ?>des Servers, der die Aufrechterhaltung der Regeln überwacht.
    </li>
    <li>
        <strong>Administrator (Admin)</strong><br />
        Serverbetreiber, die sämtliche Rechte inne haben und in allen Situationen das letzte Wort haben (können).
    </li>
</ul>


<p>Bei Problemen bitte zunächst an den nächst höheren Rang wenden.</p>