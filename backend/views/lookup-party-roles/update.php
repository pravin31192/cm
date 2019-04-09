<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\LookupPartyRoles */

$this->title = 'Update Lookup Party Roles: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Lookup Party Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lookup-party-roles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
