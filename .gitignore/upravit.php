<?php
$connect = mysqli_connect("localhost", "gazimazi4fancz", "stera3000", "dataa");

$db = $_POST["DB"];

$query ="SELECT * FROM data".$db." ORDER BY id desc";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Export DAT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <style>
        body
        {
            margin:0;
            padding:0;
            background-color:#f1f1f1;
        }
        .box
        {
            width:1270px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin-top:25px;
            box-sizing:border-box;
        }
    </style>
</head>
<body>
<br /><br />
<div class="container" style="width:1100px;">
    <h2 align="center">Export Dat</h2>
    <h3 align="center">Záznamy o zpracování OU</h3>
    <br />
    <form method="post" action="export.php" align="center">
        <table class="table table-bordered table-striped">

            <tr>

            <tr>
                <th><input type="submit" name="export" value="CSV Export" class="btn btn-success" />
                </th><th>Zákazník: <input type="radio" name="typ" value="1" checked>
                </th><th>SPEA Olomouc: <input type="radio" name="typ" value="2">
                </th><th>PTC Praha: <input type="radio" name="typ" value="3">
                </th>
            </tr>

        </table>
    </form>
    <br />
    <div class="table-responsive" id="employee_table">




        <br />
        <div align="right">
            <button type="button" name="add"  class="btn btn-info" onclick="window.location.href='http://semafor.9e.cz/formular.php'">Přidat</button>
        </div>
        <div align="left">
            <form method="post">
                <button type="submit" name="DB" id="zak" class="btn btn-success" value="1">Zákazník</button>
                <button type="submit" name="DB" id="spe" class="btn btn-success" value="2">SPEA Olomouc</button>
                <button type="submit" name="DB" id="ptc" class="btn btn-success" value="3">PTC Praha</button>
            </form>
        </div>
        <br />
        <div id="alert_message"></div>
        <table class="table table-bordered table-striped" id="user_data">
            <thead>
            <tr>
                <th width="2%">ID</th>
                <th width="8%">Datum a Čas</th>
                <th width="4%"># Helpdesk</th>
                <th width="12%">Jméno a kontaktní údaje zákazníka</th>
                <th width="12%">Jméno / Medoro</th>
                <th width="12%">Kategorie zpracování</th>
                <th width="12.5%">Popis servisního zásahu</th>
                <th width="12.5%">obecný popis technických a organizačně bezpečnostních opatření</th>
                <th width="12.5%">Předání třetí země / mezinárodní organizace</th>
                <th width="12.5%">poznámka</th>
            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["datum_cas"]; ?></td>
                    <td><?php echo $row["helpdesk"]; ?></td>
                    <td><?php echo $row["jmeno_kontakt"]; ?></td>
                    <td><?php echo $row["jmenoMed"]; ?></td>
                    <td><?php echo $row["kategorie"]; ?></td>
                    <td><?php echo $row["servisni_zasah"]; ?></td>
                    <td><?php echo $row["obecny_popis"]; ?></td>
                    <td><?php echo $row["predani_treti_zemi"]; ?></td>
                    <td><?php echo $row["poznamky"]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>

    </div>
</div>










</body>
</html>