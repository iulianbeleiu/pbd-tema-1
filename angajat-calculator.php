<?php

require 'Classes/Statements.php';

$statements = new Statements();
$employeeComputers = $statements->getAllEmployeeComputers();
$employees = $statements->getAllEmployees();
$computers = $statements->getAllComputers();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_angajat = $_POST['id_angajat'];
    $id_calculator = $_POST['id_calculator'];

    $id = $statements->insertEmployeeComputer($id_angajat, $id_calculator);

    header('Location: angajat-calculator.php');
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
        </nav>
        <form method="POST" class="mt-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select class="custom-select" required name="id_angajat">
                    <option value="">Selecteaza Angajat</option>
                        <?php foreach($employees as $key => $employee): ?>
                            <option value="<?= $employee['id'] ?>">Nume: <?= $employee['nume'] ?> Legitimatie: <?= $employee['nr_legitimatie'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <select class="custom-select" required name="id_calculator">
                    <option value="">Selecteaza Computer</option>
                    <?php foreach($computers as $key => $computer): ?>
                        <option value="<?= $computer['id'] ?>">Nr. Inventar: <?= $computer['nr_inventar'] ?> Descriere: <?= $computer['descriere'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
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
                <th scope="col">Descriere Computer</th>
                <th scope="col">Nr. Inventar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($employeeComputers as $key => $employeeComputer): ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $employeeComputer['nume'] ?></td>
                        <td><?= $employeeComputer['prenume'] ?></td>
                        <td><?= $employeeComputer['nr_legitimatie'] ?></td>
                        <td><?= $employeeComputer['descriere'] ?></td>
                        <td><?= $employeeComputer['nr_inventar'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>