<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Constituencies */

$this->title = 'Update Constituencies: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Constituencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="constituencies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
