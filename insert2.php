<?php
include "polacz.php";
$klasa = !isset($_POST['klasa']) ? '' : $_POST['klasa'];
$imie_i_nazwisko = !isset($_POST['imienazwisko']) ? '' : $_POST['imienazwisko'];
$link = !isset($_POST['link']) ? '' : $_POST['link'];
$rozwiazanie = !isset($_POST['rozwiazanie']) ? '' : $_POST['rozwiazanie'];
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set("Europe/Warsaw");
$data = date("Y-m-d H:i:s", time());
echo $data;

$sql = $baza->prepare("INSERT INTO rozwiazania VALUES ('', ?, ?, ?, ?, ?, '', ?);");
if ($sql)
{
        $sql->bind_param("ssssss", $klasa, $imie_i_nazwisko, $link, $rozwiazanie, $data, $ip);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
// header ("Location: http://localhost/juzef/");
?>