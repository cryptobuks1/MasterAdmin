<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\enbd\models\WebUserMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-user-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'User_ID',
            //'Login_Name',
            'Fname',
            'Lname',
            'Email:email',
            'Mobile',
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

           // ['class' => 'yii\grid\ActionColumn'],
           [
            'header' => 'Action',
            'headerOptions' => [
            'style' => 'color:#3c8dbc'],
            'content' => function($data) {
            //$deleteUrl = Url::to(["delete", "id" => $data->id]);
            $viewUrl = Url::to(["view", "id" => $data->User_ID]);
            $return =" <a role='menuitem' tabindex='-1' title='View' aria-label='View'  href='{$viewUrl}'><span class='glyphicon glyphicon glyphicon-eye-open'></span></a>";
            return  $return;
        }
        ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
