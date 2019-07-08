<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\WebUserMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Web User Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-user-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Web User Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'User_ID',
            'Login_Name',
            'Fname',
            'Lname',
            'Email:email',
            //'Mobile',
            //'mobileVerified',
            //'City',
            //'ZipCode',
            //'Country',
            //'Address',
            //'Gender',
            //'CardTypeID',
            //'CardNo:ntext',
            //'Emirates_card_no',
            //'PasswordHash',
            //'Password',
            //'RealPassword',
            //'HomeCourse',
            //'Handicap',
            //'DOB',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
