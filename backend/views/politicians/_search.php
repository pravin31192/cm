<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PoliticiansSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="politicians-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'street') ?>

    <?= $form->field($model, 'constituency') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'current_party') ?>

    <?php // echo $form->field($model, 'party_name') ?>

    <?php // echo $form->field($model, 'previous_party') ?>

    <?php // echo $form->field($model, 'previous_party_name') ?>

    <?php // echo $form->field($model, 'active_from') ?>

    <?php // echo $form->field($model, 'mobile_no') ?>

    <?php // echo $form->field($model, 'personal_email_id') ?>

    <?php // echo $form->field($model, 'official_email_id') ?>

    <?php // echo $form->field($model, 'fb_profile') ?>

    <?php // echo $form->field($model, 'twitter_profile') ?>

    <?php // echo $form->field($model, 'profile_photo') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
