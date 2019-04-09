<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\PartyPostings */

$this->title = 'Create Party Postings';
$this->params['breadcrumbs'][] = ['label' => 'Party Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="party-postings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
