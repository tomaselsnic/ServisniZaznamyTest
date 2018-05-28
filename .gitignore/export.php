<?php

$delimiter = ";";


if(isset($_POST["export"]))
{
    $connect = mysqli_connect("localhost", "gazimazi4fancz", "stera3000", "dataa");
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=data.csv');
    echo "\xEF\xBB\xBF";
    $output = fopen("php://output", "w");
    fputcsv($output, array('id', 'datum_cas', 'helpdesk', 'jmeno_kontakt', 'jmenoMed',
        'kategorie', 'servisni_zasah', 'obecny_popis', 'predani_treti_zemi', 'poznamky'),$delimiter );



    $query = "SELECT * from data".$_POST["typ"]." ORDER BY id DESC";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row, $delimiter);
    }
    fclose($output);
}
?>