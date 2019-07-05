<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\CustomerCareExecutiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Care Executives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-care-executive-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer Care Executive', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CustomerCareExecutiveId',
            'FirstName',
            'LastName',
            'GenderId',
            'UserId',
            //'Email:email',
            //'Password',
            //'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
