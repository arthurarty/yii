<?php
use yii\helpers\Html;
?>
<h1>People</h1>
<ul>
<?php foreach ($people as $person): ?>
    <li>
        Name: <?= Html::encode("{$person->name}") ?>
    </li>
<?php endforeach; ?>
</ul>