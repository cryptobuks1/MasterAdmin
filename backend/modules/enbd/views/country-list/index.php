<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\CountryListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Country Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_countries',
            'name',
            'iso_alpha2',
            'iso_alpha3',
            'iso_numeric',
            'currency_code',
            'currency_name',
            'currrency_symbol',
            'preferred_currrency',
            //'flag',
            'isActive',
            'paymntEngine',
            'isdCode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
