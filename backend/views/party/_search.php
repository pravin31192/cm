<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PartySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'party_name') ?>

    <?= $form->field($model, 'party_abbrevation') ?>

    <?= $form->field($model, 'found_by') ?>

    <?php // echo $form->field($model, 'found_by_name') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
