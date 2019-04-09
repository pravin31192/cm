<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Politicians */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Politicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="politicians-view">

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
            'first_name',
            'last_name',
            'street',
            'constituency',
            'district',
            'state',
            'current_party',
            'party_name',
            'previous_party',
            'previous_party_name',
            'active_from',
            'mobile_no',
            'personal_email_id:email',
            'official_email_id:email',
            'fb_profile:ntext',
            'twitter_profile:ntext',
            'profile_photo:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
