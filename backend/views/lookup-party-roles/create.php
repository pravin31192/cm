<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\LookupPartyRoles */

$this->title = 'Create Lookup Party Roles';
$this->params['breadcrumbs'][] = ['label' => 'Lookup Party Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lookup-party-roles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
