<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\CustomerCareExecutiveActivityLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Care Executive Activity Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-care-executive-activity-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer Care Executive Activity Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CustomerCareExecutiveActivityLogId',
            'CustomerCareExecutiveId',
            'LoginDateTime',
            'LogoutDateTime',
            'OperatingSystem',
            //'Browser',
            //'IP',
            'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
