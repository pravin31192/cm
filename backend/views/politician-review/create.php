<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\PoliticianReview */

$this->title = 'Create Politician Review';
$this->params['breadcrumbs'][] = ['label' => 'Politician Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="politician-review-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
