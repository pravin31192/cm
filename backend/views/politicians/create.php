<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Politicians */

$this->title = 'Create Politicians';
$this->params['breadcrumbs'][] = ['label' => 'Politicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="politicians-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
