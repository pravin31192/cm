<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\backend\models\LookupPartyRoles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lookup-party-roles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'party_role_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
