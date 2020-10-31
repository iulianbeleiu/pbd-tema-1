<?php

require_once 'Classes/Statements.php';

$statements = new Statements();
$maxValue = $statements->maxValue();
?>
<p>10. Sa se afiseze utilizatorul care utilizeaza licente avand cea mai mare valoare totala de achizitie
(indiferent de numarul de calculatoare din dotare).</p>
<hr/>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Valoare</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($maxValue as $key => $value): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $value['nume'] ?></td>
                <td><?= $value['prenume'] ?></td>
                <td><?= $value['valoare'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>