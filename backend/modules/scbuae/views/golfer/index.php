<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\GolferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golfers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golfer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golfer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GolferId',
            'FirstName',
            'LastName',
            //'DateOfBirth',
            //'Handicap',
            'Email:email',
            //'country',
            //'passwordHash',
            'Mobile',
            //'Last8Digits',
            'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
