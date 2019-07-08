<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\FourBallMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Four Ball Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="four-ball-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Four Ball Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fourBallID',
            'BookID',
            'fourBallName',
            'fourBallEmail:email',
            'fourBallPhoneNum',
            //'bookedByUserID',
            //'cdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
