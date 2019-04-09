<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Party */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="party-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'party_name')->textInput() ?>

    <?= $form->field($model, 'party_abbrevation')->textInput() ?>

    <?= $form->field($model, 'found_by')->textInput() ?>

    <?= $form->field($model, 'found_by_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
