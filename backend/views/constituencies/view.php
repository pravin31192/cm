<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Constituencies */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Constituencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constituencies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'district_id',
            'name',
            'current_member',
            'current_member_name',
            'previous_member',
            'previous_member_name',
            'current_party',
            'slug',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
