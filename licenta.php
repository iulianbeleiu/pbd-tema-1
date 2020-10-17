<?php

require 'Classes/Statements.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $statements = new Statements();

    $tip = $_POST['tip'];
    $produs = $_POST['produs'];
    $producator = $_POST['producator'];
    $valoare = $_POST['valoare'];
    $document = $_POST['document'];

    $id = $statements->insertLicenta($tip, $produs, $producator, $valoare, $document);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tema 9</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar sticky-top navbar-light bg-light mt-4">
            <a class="navbar-brand" href="index.php">Acasa</a>
            <a class="navbar-brand" href="angajat.php">Angajat</a>
            <a class="navbar-brand" href="calculator.php">Calculator</a>
            <a class="navbar-brand" href="licenta.php">Licenta</a>
        </nav>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label for="tip">Tip</label>
                <input type="text" class="form-control" id="tip" name="tip">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produs">Produs</label>
                    <input type="text" class="form-control" id="produs" name="produs">
                </div>
                <div class="form-group col-md-6">
                    <label for="producator">Producator</label>
                    <input type="text" class="form-control" id="producator" name="producator">
                </div>
            </div>
            <div class="form-group">
                <label for="valoare">Valoare</label>
                <input type="number" class="form-control" id="valoare" name="valoare">
            </div>
            <div class="form-group">
                <label for="document">Document</label>
                <input type="text" class="form-control" id="document" name="document">
            </div>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>

        <?php if (isset($id)): ?>
            <p>Calculatorul cu ID-ul <?= $id ?> a fost adaugat.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>