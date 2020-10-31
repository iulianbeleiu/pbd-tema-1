<?php

require 'Classes/Statements.php';

$statements = new Statements();
$computerLicences = $statements->getAllComputerLicences();
$licences = $statements->getAllLicences();
$computers = $statements->getAllComputers();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_licenta = $_POST['id_licenta'];
    $id_calculator = $_POST['id_calculator'];

    $id = $statements->insertComputerLicence($id_calculator, $id_licenta);

    header('Location: calculator-licenta.php');
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select class="custom-select" required name="id_calculator">
                    <option value="">Selecteaza Computer</option>
                    <?php foreach($computers as $key => $computer): ?>
                        <option value="<?= $computer['id'] ?>">Nr. Inventar: <?= $computer['nr_inventar'] ?> Descriere: <?= $computer['descriere'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <select class="custom-select" required name="id_licenta">
                    <option value="">Selecteaza Licenta</option>
                        <?php foreach($licences as $key => $licence): ?>
                            <option value="<?= $licence['id'] ?>">Tip: <?= $licence['tip'] ?> Produs: <?= $licence['produs'] ?></option>
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
                <th scope="col">Descriere</th>
                <th scope="col">Nr. Inventar</th>
                <th scope="col">Tip Licenta</th>
                <th scope="col">Produs Licenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($computerLicences as $key => $computerLicence): ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $computerLicence['descriere'] ?></td>
                        <td><?= $computerLicence['nr_inventar'] ?></td>
                        <td><?= $computerLicence['tip'] ?></td>
                        <td><?= $computerLicence['produs'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>