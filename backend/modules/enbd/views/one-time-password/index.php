<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\OneTimePasswordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'One Time Passwords';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="one-time-password-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create One Time Password', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OtpID',
            'UserID',
            'OTP',
            'MID',
            'isActive',
            //'CTime',
            //'ETime',
            //'Times:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
