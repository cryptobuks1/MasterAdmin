<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\WebUserCardsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Web User Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-user-cards-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Web User Cards', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'User_ID',
            'CardTypeID',
            'CardNo',
            'CardName',
            //'ValidFrom',
            //'ValidTill',
            //'isDiscountAllowed',
            //'AvlCompGames',
            //'AvlLearnSessions',
            //'AvlAssistSessions',
            //'AvlGlobalSessions',
            //'AvlTrophyGames',
            //'AvlPNRGames',
            //'AvlTrophyPGames',
            //'isActive',
            //'isFlexiUser',
            //'DateAdded',
            //'ActivatedOn',
            //'RenewedOn',
            //'CountryOrigin',
            //'enbdVerified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
