<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\Constituencies */

$this->title = 'Create Constituencies';
$this->params['breadcrumbs'][] = ['label' => 'Constituencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constituencies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
