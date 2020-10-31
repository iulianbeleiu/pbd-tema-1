<?php

require_once 'Classes/Statements.php';

$statements = new Statements();
$employeesNoProdoucts = $statements->employeesNoProducts();
?>
<p>9. Sa se afiseze calculatoarele si utilizatorii acestora care nu au alocate produsele Windows sau
Office, precizand: nr. inventar, nume, prenume, nr. legit si respectiv ce produs lipseste.</p>
<hr/>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nr. Inventar</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Nr. Legitimatie</th>
            <th scope="col">Produse</th>
            <th scope="col">Produse Lipsa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($employeesNoProdoucts as $key => $value): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $value['nr_inventar'] ?></td>
                <td><?= $value['nume'] ?></td>
                <td><?= $value['prenume'] ?></td>
                <td><?= $value['nr_legitimatie'] ?></td>
                <td><?= $value['produse'] ?></td>
                <td><?= $value['produse_lipsa'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>