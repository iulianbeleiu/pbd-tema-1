<?php

require 'Classes/Statements.php';

$statements = new Statements();
$employees = $statements->getAllEmployees();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $nr_legitimatie = $_POST['nr_legitimatie'];

    $id = $statements->insertEmployee($nume, $prenume, $nr_legitimatie);

    header('Location: angajat.php');
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nume">Nume</label>
                    <input type="text" class="form-control" id="nume" name="nume">
                </div>

                <div class="form-group col-md-6">
                    <label for="prenume">Prenume</label>
                    <input type="text" class="form-control" id="prenume" name="prenume">
                </div>
            </div>
            <div class="form-group">
                <label for="nr_legitimatie">Nr. Legitimatie</label>
                <input type="text" class="form-control" id="nr_legitimatie" name="nr_legitimatie">
            </div>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nume</th>
                <th scope="col">Prenume</th>
                <th scope="col">Nr. Legitimatie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($employees as $key => $employee): ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $employee['nume'] ?></td>
                        <td><?= $employee['prenume'] ?></td>
                        <td><?= $employee['nr_legitimatie'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>