<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\CustomerCareExecutiveActivityLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Care Executive Activity Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-care-executive-activity-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create Customer Care Executive Activity Log', ['create'], ['class' => 'btn btn-success']) ?>
    -->
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
            'Browser',
            'IP',
            'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            //['class' => 'yii\grid\ActionColumn'],
            [
                'header' => 'Action',
                'headerOptions' => [
                'style' => 'color:#3c8dbc'],
                'content' => function($data) {
                //$deleteUrl = Url::to(["delete", "id" => $data->id]);
                $viewUrl = Url::to(["view", "id" => $data->CustomerCareExecutiveActivityLogId]);
                $return =" <a role='menuitem' tabindex='-1' title='View' aria-label='View'  href='{$viewUrl}'><span class='glyphicon glyphicon glyphicon-eye-open'></span></a>";
                return  $return;
            }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
