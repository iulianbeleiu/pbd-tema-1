<?php

require 'Classes/Statements.php';

$statements = new Statements();
$licences = $statements->getAllLicences();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tip = $_POST['tip'];
    $produs = $_POST['produs'];
    $producator = $_POST['producator'];
    $valoare = $_POST['valoare'];
    $document = $_POST['document'];

    $id = $statements->insertLicenta($tip, $produs, $producator, $valoare, $document);
    header('Location: licenta.php');
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
            <a class="navbar-brand" href="angajat-calculator.php">Angajat-Calculator</a>
            <a class="navbar-brand" href="calculator-licenta.php">Calculator-Licenta</a>
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

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Tip licenta</th>
                <th scope="col">Produs</th>
                <th scope="col">Producator</th>
                <th scope="col">Valoare</th>
                <th scope="col">Document</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($licences as $key => $licence): ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $licence['tip'] ?></td>
                        <td><?= $licence['produs'] ?></td>
                        <td><?= $licence['producator'] ?></td>
                        <td><?= $licence['valoare'] ?></td>
                        <td><?= $licence['document'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>