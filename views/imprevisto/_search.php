<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImprevistoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imprevisto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imprevisto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'rut_parvulo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
