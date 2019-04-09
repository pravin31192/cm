<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\PoliticianReview */

$this->title = 'Update Politician Review: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Politician Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="politician-review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
