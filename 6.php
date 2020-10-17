<?php

require_once 'Classes/Statements.php';

$statements = new Statements();
$data = $statements->detailedReport();
?>
<p>6. Sa se genereze un raport detaliat care sa cuprinda numarul de licente, valoarea totala a
acestora in functie de producator, tip licenta si anul achizitiei, ordonat dupa an in sens
descrescator, apoi dupa producator si tip licenta. Anul este reprezentat de ultimele 4 caractere
din coloana document de achizitie.</p>
<hr/>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Producator</th>
        <th scope="col">Tip</th>
        <th scope="col">Nr. Licente</th>
        <th scope="col">Valoare Totala</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $key => $value): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $value['producator'] ?></td>
                <td><?= $value['tip'] ?></td>
                <td><?= $value['nr_licente'] ?></td>
                <td><?= $value['valoare_totala'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>