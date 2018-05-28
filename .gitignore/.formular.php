<html>
<head>
    <title>FORMULÁŘ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        input{
            float: bottom;
        }
    </style>
</head>
<body>
<div class="container" style="width:1100px;">
    <h2 align="center">Import Dat</h2>
    <h3 align="center">Záznamy o zpracování OU</h3>

    <div align="right">
        <button type="button" name="back" id="back" class="btn btn-info" onclick="window.location.href='http://semafor.9e.cz/upravit.php'">Zpět</button>
    </div>

    <table class="table table-bordered table-striped" id="user_data">
        <form method='post' action='update.php'  >
            <tr>
                <th>Zákazník: <input type="radio" name="typ" value="1" checked>
                    SPEA Olomouc: <input type="radio" name="typ" value="2">
                    PTC Praha: <input type="radio" name="typ" value="3">
                <th>
                </th>
            </tr>


            <tr>
                <th>Datum a čas</th>
                <th><input type="datetime-local" name='datum' required placeholder='YYYY-MM-DD HH:mm'></th>

            </tr>
            <tr>
                <th># helpdesku</th>
                <th><input type='checkbox' name='help'value = "ANO" ></th>

            </tr>
            <tr>
                <th>Jméno a kontaktní údaje zákazníka</th>
                <th><input type='text' name='jmeno' required></th>

            </tr>
            <tr>
                <th>Jméno / Medoro</th>
                <th><input type='text' name='jmeMed' required ></th>

            </tr>
            <tr>
                <th>Kategorie zpracovani</th>
                <th><input type='text' name='kategorie'required ></th>

            </tr>
            <tr>
                <th>Popis servisního zásahu</th>
                <th><input type='text' name='popis' required></th>

            </tr>
            <tr>
                <th>obecný popis technických a organizačně bezpečnostních opatření</th>
                <th><input type='text' name='obecPopis' required ></th>

            </tr>
            <tr>
                <th>Předání třetí země / mezinárodní organizace</th>
                <th><input type='checkbox' name='pridani' value = "ANO"></th>

            </tr>
            <tr>
                <th>Poznámka</th>
                <th><input type='text' name='poznamka' required></th>

            </tr>
            <tr>
                <th></th>
                <th><input type='submit' value='Odeslat' ></th>

            </tr>


        </form >
    </table>
</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: stopk
 * Date: 2018/05/24
 * Time: 12:45
 */

?>
