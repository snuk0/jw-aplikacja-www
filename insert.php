<?php
include "polacz.php";
$klasa = !isset($_POST['klasa']) ? '' : $_POST['klasa'];
$temat = !isset($_POST['temat']) ? '' : $_POST['temat'];
$tresc = !isset($_POST['tresc']) ? '' : $_POST['tresc'];
$data_i_godzina = !isset($_POST['data_i_godzina']) ? '' : $_POST['data_i_godzina'];
$data_i_godzina_oddania = !isset($_POST['data_i_godzina_oddania']) ? '' : $_POST['data_i_godzina_oddania'];

date_default_timezone_set("Europe/Warsaw");
$data = date("Y-m-d H:i:s", time());
echo $data;

$sql = $baza->prepare("INSERT INTO zadania VALUES ('', ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("sssss", $klasa, $temat, $tresc, $data, $data_i_godzina_oddania);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
// header ("Location: http://localhost/juzef/");
?>