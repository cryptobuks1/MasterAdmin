<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\amex\models\CardHolderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Card Holders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-holder-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Card Holder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CardHolderID',
            'Mobile',
            'Name',
            'Handicap',
            'CardTypeID',
            //'HolderTypeID',
            //'SupplementaryMobile',
            //'SupplementaryName',
            //'SupplementaryHandicap',
            //'IsActive',
            //'CreatedOn',
            //'LastUpdated',
            //'CreatedBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
