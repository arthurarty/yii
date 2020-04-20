<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>People</h1>
<div class="row">
    <div class="col-lg-6">
        <ul>
        <?php foreach ($people as $person): ?>
            <li>
                Name: <?= Html::encode("{$person->name}") ?> Age: <?= Html::encode("{$person->age}") ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'age')->input('number') ?>
            <div class="form-group">
                <?= Html::submitButton('Add Person', [
                    'class' => 'btn btn-primary'
                ]) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
