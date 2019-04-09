<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Constituencies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constituencies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_member')->textInput() ?>

    <?= $form->field($model, 'current_member_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_member')->textInput() ?>

    <?= $form->field($model, 'previous_member_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_party')->textInput() ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
