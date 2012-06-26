<?php

define("IN_AKTIVIERUNG", true);

define("SELF", $_SERVER['PHP_SELF'].empty($_SERVER['argv']) ? "" : "?".$_SERVER['argv']);

/*
 * REGELN
 */
if(isset($_POST['nb']) && $_POST['nb'] == 1 && isset($_POST['submit-1'])) {

    include "regeln_akt.php";

}

/*
 * ABSCHLUSS
 */
elseif(isset($_POST['regeln']) && $_POST['regeln'] == 1 && isset($_POST['submit-2'])) {

    include "abschluss.php";

}

/*
 * AGBs
 */
else {

    include "agb.php";

}
?>
