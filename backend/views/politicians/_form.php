<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Politicians */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="politicians-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'constituency')->textInput() ?>

    <?= $form->field($model, 'district')->textInput() ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <?= $form->field($model, 'current_party')->textInput() ?>

    <?= $form->field($model, 'party_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_party')->textInput() ?>

    <?= $form->field($model, 'previous_party_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active_from')->textInput() ?>

    <?= $form->field($model, 'mobile_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'official_email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fb_profile')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twitter_profile')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'profile_photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
