<?php
/**
 * Created by PhpStorm.
 * User: stopk
 * Date: 2018/05/24
 * Time: 13:18
 */
//pripojeni k db
try{
    $bdd = new PDO('mysql:host=localhost;dbname=dataa;charset=utf8', 'gazimazi4fancz', 'stera3000');
}catch(Exception $e)
{
    die('Error : '.$e->getMessage());
}

$db = $_POST["vyber"];

$sql = "INSERT INTO `data".$db."`(`id`, `datum_cas`, `helpdesk`, `jmeno_kontakt`, `jmenoMed`, 
`kategorie`, `servisni_zasah`, `obecny_popis`, `predani_treti_zemi`, `poznamky`)
VALUES ('','$_POST[datum]','$_POST[help]','$_POST[jmeno]','$_POST[jmeMed]','$_POST[kategorie]',
'$_POST[popis]','$_POST[obecPopis]','$_POST[pridani]','$_POST[poznamka]')";
$bdd->query($sql);

header('Location: http://semafor.9e.cz/formular.php');
exit;

?>
