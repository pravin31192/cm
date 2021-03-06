<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\PartyPostings */

$this->title = 'Update Party Postings: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Party Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="party-postings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
