<?php

require_once 'Classes/Statements.php';

$statements = new Statements();
$licencesTotalValuesByPrducer = $statements->getLicencesTotalValueByProducer();
?>
<p>5. Sa se genereze un raport care sa cuprinda numarul de licente, valoarea totala a acestora in
functie de producator.</p>
<hr/>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Producator</th>
        <th scope="col">Nr. Licente</th>
        <th scope="col">Valoare Totala</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($licencesTotalValuesByPrducer as $key => $value): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $value['producator'] ?></td>
                <td><?= $value['nr_licente'] ?></td>
                <td><?= $value['valoare_totala'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>