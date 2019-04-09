<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PoliticiansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Politicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="politicians-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Politicians', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'street',
            'constituency',
            //'district',
            //'state',
            //'current_party',
            //'party_name',
            //'previous_party',
            //'previous_party_name',
            //'active_from',
            //'mobile_no',
            //'personal_email_id:email',
            //'official_email_id:email',
            //'fb_profile:ntext',
            //'twitter_profile:ntext',
            //'profile_photo:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
