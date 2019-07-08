<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\NoShowPenalitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'No Show Penalities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="no-show-penality-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create No Show Penality', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penalityID',
            'penalityAmount',
            'bookingIDS',
            'payStatus',
            'insertDateTime',
            //'updateDateTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
