<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ConstituenciesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constituencies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'district_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'current_member') ?>

    <?= $form->field($model, 'current_member_name') ?>

    <?php // echo $form->field($model, 'previous_member') ?>

    <?php // echo $form->field($model, 'previous_member_name') ?>

    <?php // echo $form->field($model, 'current_party') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
